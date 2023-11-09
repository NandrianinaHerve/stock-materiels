<?php
include 'db.php';

// Récupérer l'ID de service à supprimer
$idcat = $_POST['idcat'];

if (!empty($idcat)) {
    $sql = "DELETE FROM `categorie` WHERE `idcat`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idcat); // 'i' signifie que c'est un entier
    
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