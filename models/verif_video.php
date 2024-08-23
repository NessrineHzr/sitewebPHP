<?php
session_start();
include '../controllers/connection.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql = "SELECT id_user FROM user WHERE mail = '$email'";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $id_user = $row['id_user']; 

        // Récupérer les informations de la catégorie et du cours
        $categorie = 'video';
        $nom_c = $_GET['nom_c'];
        $date_c = date('Y-m-d'); // Date actuelle

        // Insérer dans la base de données
        $sql_insert = "INSERT INTO cours (categorie_c, nom_c, date_c, id_user) VALUES ('$categorie', '$nom_c', '$date_c', '$id_user')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "Cours enregistré avec succès!";
        } else {
            echo "Erreur: " . $conn->error;
        }
    }
}

if ($nom_c == "Apprenez les couleurs") {
    header("Location: https://www.youtube.com/watch?v=9y5JLftVKCg");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
} elseif ($nom_c == "") {
    header("");
}

$conn->close();
?>
