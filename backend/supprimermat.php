<?php
include 'db.php';

// Récupérer l'ID de service à supprimer
$idmat = $_POST['idmat'];

if (!empty($idmat)) {
    $sql = "DELETE FROM `materiels` WHERE `idmat`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idmat); // 'i' signifie que c'est un entier
    
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