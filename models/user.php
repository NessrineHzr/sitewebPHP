<?php
include '../controllers/connection.php';
global $conn;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naiss = $_POST['date_naiss'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$adresse = $_POST['adresse'];
$num_tel = $_POST['num_tel'];
$nbr_enfant = $_POST['nbr_enfant'];
$cin = $_POST['cin'];

$query = "INSERT INTO user (nom,prenom,date_naiss,mail,mdp,adresse,num_tel,nbr_enfant,cin)
            VALUES ('$nom', '$prenom', '$date_naiss', '$mail', '$mdp', '$adresse', '$num_tel', '$nbr_enfant', '$cin')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Utilisateur enregistré avec succès.";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

?>
