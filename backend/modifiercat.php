<?php

include 'db.php';

// Récupérer les données à mettre à jour
$idcat = $_POST['idcat1']; // L'ID de l'enregistrement à mettre à jour
$nomcat = $_POST['nomcat1'];
$design = $_POST['design1'];

if (!empty($idcat) && !empty($nomcat) && !empty($design)) {
    $sql = "UPDATE `categorie` SET `nomcat`=?, `design`=? WHERE `idcat`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $nomcat, $design, $idcat);
    
    if ($stmt->execute()) {
        echo json_encode(array('msg' => 'Mise à jour réussie'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de la mise à jour'));
    }
    $stmt->close();
} else {
    echo json_encode(array('msg' => 'Veuillez remplir tous les champs'));
}

$conn->close();
?>