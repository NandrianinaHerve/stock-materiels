<?php
include 'db.php';
$sql = "SELECT * FROM service order by idServ";

$result = $conn->query($sql);
$conn->close();



?>