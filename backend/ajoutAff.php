<?php
include 'db.php';

$dateAffect=$_POST['dateAffect'];
$idser=$_POST['idser'];
$idmat=$_POST['idmat'];
$nombre=$_POST['nombre'];


if (!empty($idmat) && !empty($idser) && !empty($nombre)) {
    $sql = "INSERT INTO `affectation` (`dateAffect`, `idser`, `idmat`, `nombre`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $dateAffect, $idser, $idmat, $nombre);
    
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