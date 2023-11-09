<?php
include 'db.php';
$sql = "SELECT * FROM `categorie` ORDER BY idcat";

$result = $conn->query($sql);
$conn->close();



?>