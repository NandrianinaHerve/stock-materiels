<?php

include 'db.php';

// Récupérer les données à mettre à jour
$idServ = $_POST['idServ1']; // L'ID de l'enregistrement à mettre à jour
$nomServ = $_POST['nomServ1'];
$Responsable = $_POST['Responsable1'];

if (!empty($idServ) && !empty($nomServ) && !empty($Responsable)) {
    $sql = "UPDATE `service` SET `nomServ`=?, `Responsable`=? WHERE `idServ`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $nomServ, $Responsable, $idServ);
    
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


