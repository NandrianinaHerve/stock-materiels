<?php

include 'db.php';


$idmat1 = $_POST['idmat1'];
$idcat1 = $_POST['idcat1']; // L'ID de l'enregistrement à mettre à jour
$nomMateriel1 = $_POST['nomMateriel1'];
$quantite1 = $_POST['quantite1'];
$dateE11 = $_POST['dateE11'];

if (!empty($idmat1) &&!empty($idcat1)  && !empty($nomMateriel1) && !empty($quantite1)) {
    $sql = "UPDATE `materiels` SET `idcat`=?, `nomMateriel`=?, `quantite`=?, `dateE`=? WHERE `idmat`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isssi', $idcat1, $nomMateriel1, $quantite1,$dateE11,$idmat1);
    
    if ($stmt->execute()) {
        echo json_encode(array('msg' => 'Mise à jour réussie'));
    } else {
        echo json_encode(array('msg' => 'Erreur lors de la mise à jour'));
    }
    $stmt->close();
} else {
    echo json_encode(array('msg' => 'Veuillez remplir tous les champs'));
}

$conn->close();
?>