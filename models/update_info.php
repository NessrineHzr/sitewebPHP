<?php
include '../controllers/connection.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../view/login.php");
    exit();
}

$email = $_SESSION['email'];
$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$cin = mysqli_real_escape_string($conn, $_POST['cin']);
$date_naiss = mysqli_real_escape_string($conn, $_POST['date_naiss']); // Date traitée comme une chaîne
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$num_tel = mysqli_real_escape_string($conn, $_POST['num_tel']);
$nbr_enfant = mysqli_real_escape_string($conn, $_POST['nbr_enfant']); // Nombre d'enfants traité comme une chaîne
$mdp = $_SESSION['password'];

// Préparer la requête SQL pour mettre à jour les informations de l'utilisateur
$query = "UPDATE user SET 
    nom = '$nom', 
    prenom = '$prenom', 
    date_naiss = '$date_naiss', 
    mdp = '$mdp', 
    adresse = '$adresse', 
    num_tel = '$num_tel', 
    nbr_enfant = '$nbr_enfant', 
    cin = '$cin' 
WHERE mail = '$email'";

// Exécuter la requête
if ($conn->query($query) === TRUE) {
    echo "Informations mises à jour avec succès!<br>";
    echo "CIN: " . $cin . "<br>";
    echo "Nom: " . $nom . "<br>";
    echo "Prénom: " . $prenom . "<br>";
    echo "Date de Naissance: " . $date_naiss . "<br>";
    echo "Adresse: " . $adresse . "<br>";
    echo "Numéro de Téléphone: " . $num_tel . "<br>";
    echo "Nombre d'Enfants: " . $nbr_enfant . "<br>";
} else {
    echo "Erreur lors de la mise à jour: " . $conn->error;
}

$conn->close();


exit();
?>
