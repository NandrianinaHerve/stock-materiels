<?php
include ('db1.php');
$idmat = $_POST['idmat'];
$query = "SELECT * FROM materiels WHERE idmat = $idmat";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$row = $statement->rowCount();

$output = '
<select name="qteInit" id="qteInit" class="form-control">';
if($row > 0){
    $count = 0;
    foreach($result as $r){
        $count =  $count + 1;
        $output .= '
        <option value='.$r["quantite"].'>'.$r["quantite"].'</option>
        ';
    }
}else{
$output .= '
<option value="0">0</option>';
}

$output .= '</select>';

echo $output;




?>