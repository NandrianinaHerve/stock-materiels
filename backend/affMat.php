<?php
include ('db1.php');
$idmat = $_POST['idmat'];
$query = "SELECT * FROM materiels WHERE idmat = $idmat";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$row = $statement->rowCount();

if($row > 0){
    $count = 0;
    foreach($result as $r){
        $count =  $count + 1;
        $output = '
        <option value='.$r["nomMateriel"].'>'.$r["nomMateriel"].'</option>
        ';
    }
}else{
$output .= '
<option ></option>';
}

echo $output;




?>