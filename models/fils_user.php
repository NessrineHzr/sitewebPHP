<?php
include '../controllers/connection.php';
global $conn;

$prenom_f = $_POST['prenom_f'];
$date_naiss_f = $_POST['date_naiss_f'];
$genre = $_POST['genre'];
$niveau = $_POST['niveau'];
$cin = $_POST['cin'];

$query = "INSERT INTO fils (prenom_f, date_naiss_f, genre, niveau, cin) 
          VALUES ('$prenom_f', '$date_naiss_f', '$genre', '$niveau', '$cin')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Informations enregistrées avec succès.";
} else {
    echo "Erreur : " . mysqli_error($conn);
}
header("Location: ../view/compte.php");

?>
