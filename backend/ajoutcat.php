<?php
include 'db.php';

$nomcat=$_POST['nomcat'];
$design=$_POST['design'];

if (!empty($nomcat) && !empty($design)) {
    $sql = "INSERT INTO `categorie` (`nomcat`, `design`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $nomcat, $design);
    
    if ($stmt->execute()) {
        echo json_encode(array('msg' => 'Enregistrement réussi'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de l\'enregistrement'));
    }
    $stmt->close();
} else {
    echo json_encode(array('msg' => 'Veuillez remplir tous les champs'));
}

$conn->close();


?>