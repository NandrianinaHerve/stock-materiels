<?php
include 'db.php';

$idEtr = $_POST['idEtr'];
$observation = $_POST['observation'];

if (!empty($idEtr) && !empty($observation)) {
    $sql = "UPDATE `entretien` SET `observation` = ? WHERE `idEtr` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $observation, $idEtr); // 's' pour string, 'i' pour integer
    
    if ($stmt->execute()) {
        echo "Observation ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'observation : " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Veuillez fournir l'ID du matériel et l'observation.";
}

$conn->close();
?>
