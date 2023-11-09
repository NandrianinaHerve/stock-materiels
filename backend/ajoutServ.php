<?php
include 'db.php';

$nomServ=$_POST['nomServ'];
$Responsable=$_POST['Responsable'];

if (!empty($nomServ) && !empty($Responsable)) {
    $sql = "INSERT INTO `service` (`nomServ`, `Responsable`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $nomServ, $Responsable);
    
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