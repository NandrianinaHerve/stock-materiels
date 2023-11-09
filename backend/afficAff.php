<?php
include 'db.php';
$sql = "SELECT a.idAffect, a.idmat, s.nomServ, m.nomMateriel, a.dateAffect, a.nombre FROM affectation a INNER JOIN service s INNER JOIN materiels m ON a.idser=s.idServ AND a.idmat = m.idmat order by idAffect";
$result = $conn->query($sql);
$conn->close();



?>