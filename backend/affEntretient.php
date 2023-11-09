<?php
include 'db.php';
$today = date('Y-m-d');
$twentyDaysLater = date('Y-m-d', strtotime('+20 days'));
$sql = "SELECT e.idEtr, e.idmat,e.nomEntretenir, e.observation, m.nomMateriel, e.date FROM entretien e  INNER JOIN materiels m ON e.idmat = m.idmat ";
$result = $conn->query($sql);
$conn->close();



?>