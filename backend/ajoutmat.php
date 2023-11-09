
    <?php
    include 'db.php';

    $nomMateriel = $_POST['nomMateriel'];
    $quantite = $_POST['quantite'];
    $idcat = $_POST['idcat'];
    $dateE = $_POST['dateE'];

    // ...

// Vérifier si un matériel avec le même nom existe déjà
$sql_select = "SELECT idmat, quantite FROM materiels WHERE nomMateriel = ? order by idmat";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param('s', $nomMateriel);
$stmt_select->execute();
$result = $stmt_select->get_result();

if ($result->num_rows > 0) {
    // Un matériel avec le même nom existe déjà
    $row = $result->fetch_assoc();
    $idmat_existant = $row['idmat'];
    $quantite_existante = $row['quantite'];

    // Mise à jour de la quantité
    $nouvelle_quantite = $quantite_existante + $quantite;

    $sql_update = "UPDATE materiels SET quantite = ? WHERE idmat = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param('ii', $nouvelle_quantite, $idmat_existant);

    if ($stmt_update->execute()) {
        echo json_encode(array('msg' => 'Quantité mise à jour avec succès'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de la mise à jour de la quantité'));
    }
    $stmt_update->close();
} else {
    // Aucun matériel avec le même nom n'existe, insérer un nouveau matériel
    $sql_insert = "INSERT INTO materiels (idcat, nomMateriel, quantite, dateE) VALUES (?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param('isss', $idcat, $nomMateriel, $quantite, $dateE);

    if ($stmt_insert->execute()) {
        echo json_encode(array('msg' => 'Enregistrement réussi'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de l\'enregistrement'));
    }
    $stmt_insert->close();
}

$stmt_select->close();



    $conn->close();
    ?>

