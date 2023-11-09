<?php
include 'db.php';
$sql = "SELECT m.idmat, c.idcat, c.nomcat, m.nomMateriel, m.quantite, m.dateE FROM materiels m INNER JOIN categorie c ON m.idcat=c.idcat order by idmat";
$result = $conn->query($sql);
$conn->close();



?>