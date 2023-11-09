<?php
include 'db.php';

$idmat = $_POST['idmat'];

// Vérifier si l'ID du matériel existe déjà dans la table
$query = "SELECT idmat FROM entretien WHERE idmat = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $idmat);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo 'existing';
} else {
    echo 'not_existing';
}

$stmt->close();
$conn->close();
?>
