<?php
include 'db.php';

// Récupérer l'ID de service à supprimer
$idAffect = $_POST['idAffect'];

if (!empty($idAffect)) {
    $sql = "DELETE FROM `affectation` WHERE `idAffect`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idAffect); // 'i' signifie que c'est un entier
    
    if ($stmt->execute()) {
        echo json_encode(array('msg' => 'Suppression réussie'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de la suppression'));
    }
    $stmt->close();
} else {
    echo json_encode(array('msg' => 'ID de service manquant'));
}

$conn->close();
?>