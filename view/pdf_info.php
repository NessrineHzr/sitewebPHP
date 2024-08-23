<?php

session_start();
include '../controllers/connection.php';

// Initialiser les variables
$prenom = '';
$date_naiss = '';
$niveau = '';

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Récupérer le CIN de la table 'user' en fonction de l'email
    $sql = "SELECT cin FROM user WHERE mail = '$email'";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $cin = $row['cin'];

        // Si le CIN est trouvé, récupérer les informations du fils
        if ($cin) {
            $sql_fils = "SELECT prenom_f, date_naiss_f, niveau FROM fils WHERE cin = '$cin'";
            $result_fils = $conn->query($sql_fils);

            if ($result_fils && $row_fils = $result_fils->fetch_assoc()) {
                $prenom = $row_fils['prenom_f'];
                $date_naiss = $row_fils['date_naiss_f'];
                $niveau = $row_fils['niveau'];
            }
        }
    }

    // Récupérer l'id de l'utilisateur
    $sql = "SELECT id_user FROM user WHERE mail = '$email'";
    $result = $conn->query($sql);
    $id_user = '';
    if ($result && $row = $result->fetch_assoc()) {
        $id_user = $row['id_user'];
    }

    // Récupérer les informations des cours pour cet utilisateur
    $sql_courses = "SELECT categorie_c, nom_c, date_c FROM cours WHERE id_user = '$id_user'";
    $result_courses = $conn->query($sql_courses);
}

$conn->close();

// Inclure la bibliothèque FPDF
require('C:/xampp/htdocs/-Projet/pdf/fpdf.php');

// Créez une instance de FPDF
$pdf = new FPDF();
$pdf->AddPage(); 
$pdf->SetTextColor(255, 0, 0);
$pdf->SetFont('Arial', 'B', 20); 
$pdf->Cell(0, 15, 'Informations de Votre Fils', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'I', 14);
$pdf->Cell(0, 10, 'Prenom de Fils: ' . $prenom, 0, 1);
$pdf->Cell(0, 10, 'Date de naissance: ' . $date_naiss, 0, 1);
$pdf->Cell(0, 10, 'Son Niveau: ' . $niveau, 0, 1);
$pdf->Ln(10); 
$pdf->SetFont('Arial', '', 12);
$pdf->Write(10, 'Au cours de son apprentissage sur notre site, votre enfant a eu l occasion d explorer une variete de ressources educatives.');
$pdf->Ln(10); 
$pdf->Write(10, 'Voici un apercu des activites etudiees par votre enfant :');
$pdf->Ln(10);

// En-tête du tableau
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 10, 'Categorie', 1);
$pdf->Cell(70, 10, 'Nom du Cours', 1);
$pdf->Cell(50, 10, 'Date', 1);
$pdf->Ln();

// Contenu du tableau
$pdf->SetFont('Arial', '', 12);
if ($result_courses && $result_courses->num_rows > 0) {
    while ($row_course = $result_courses->fetch_assoc()) {
        $pdf->Cell(70, 10, $row_course['categorie_c'], 1);
        $pdf->Cell(70, 10, $row_course['nom_c'], 1);
        $pdf->Cell(50, 10, $row_course['date_c'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'Aucune donnée disponible', 1, 1, 'C');
}
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Write(10, 'Nous sommes ravis de voir les progres de votre enfant et de continuer a lui offrir des opportunites d apprentissage enrichissantes.');



$pdf->Output('I', 'activities_for_son.pdf');

?>
