<?php
include 'db.php';

$idmat=$_POST['idmat'];
$nomEntretenir=$_POST['nomEntretenir'];
$date=$_POST['date'];

if (!empty($idmat) && !empty($date)) {
    $sql = "INSERT INTO `entretien` (`nomEntretenir`, `date`, `idmat`) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nomEntretenir, $date, $idmat);
    
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