<?php

include 'db.php';

// Récupérer les données à mettre à jour
$idmat = $_POST['idmat']; // L'ID de l'enregistrement à mettre à jour
$quantite = $_POST['quantite'];

if (!empty($idmat) && !empty($quantite)) {
    $sql = "UPDATE `materiels` SET `quantite`=? WHERE `idmat`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $quantite, $idmat);
    
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