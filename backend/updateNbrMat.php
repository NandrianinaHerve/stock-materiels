<?php

include 'db.php';

// Récupérer les données à mettre à jour
$idAffect = $_POST['idAffect']; // L'ID de l'enregistrement à mettre à jour
$nombre = $_POST['nombre'];

if (!empty($idAffect) && !empty($nombre)) {
    $sql = "UPDATE `affectation` SET `nombre`=? WHERE `idAffect`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $nombre, $idAffect);
    
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