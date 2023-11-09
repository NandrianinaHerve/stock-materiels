<?php

include 'db.php';

// Récupérer les données à mettre à jour
$idEtr = $_POST['idEtr']; // L'ID de l'enregistrement à mettre à jour
$nouvelle_date_entretien = date('Y-m-d', strtotime("+30 days"));

if (!empty($idEtr)) {
    $sql = "UPDATE `entretien` SET `date`='$nouvelle_date_entretien' WHERE `idEtr`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $idEtr);
    
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