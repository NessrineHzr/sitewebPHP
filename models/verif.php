<?php
session_start();
include '../controllers/connection.php';
global $conn;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier l'email et le mot de passe
    $query = "SELECT * FROM user WHERE mail = '$email' AND mdp = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: ../view/compte.php");
    } else {
        echo "Email ou mot de passe incorrect.";
    }

}
?>
