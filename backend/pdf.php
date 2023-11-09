<?php
include 'db.php'; // Assurez-vous que db.php inclut votre connexion à la base de données.

$idAffect = $_POST['idAffect'];
$sql = "SELECT a.idAffect, a.idmat, s.nomServ, s.Responsable, m.nomMateriel, a.dateAffect, a.nombre FROM affectation a INNER JOIN service s ON a.idser = s.idServ INNER JOIN materiels m ON a.idmat = m.idmat WHERE a.idAffect = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idAffect);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    require('../PDF/fpdf.php'); // Assurez-vous d'inclure la bibliothèque FPDF dans votre projet.

    $pdf = new FPDF();
    $pdf->AddPage();

    // En-tête
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Affectation de Materiel', 0, 1);

    // Contenu
    $pdf->SetFont('Arial', '', 12);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pdf->Cell(40, 10, 'Affectation N: ' . $row['idAffect'], 0, 1);
        $pdf->Cell(40, 10, 'On fait une affectation avec ' . $row['Responsable'], 0, 1);
        $pdf->Cell(40, 10, 'Pour le Materiel ' . $row['nomMateriel'], 0, 1);
        $pdf->Cell(40, 10, 'Le service qui pris le materiel est ' . $row['nomServ'], 0, 1);
        $pdf->Cell(40, 10, 'On declare cette affectation le ' . $row['dateAffect'], 0, 1);
    } else {
        die("Aucun résultat trouvé pour l'ID " . $idAffect);
    }

    $pdf->Output(); // Cette ligne génère le PDF et le renvoie au navigateur.
} else {
    die("Erreur lors de l'exécution de la requête : " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
