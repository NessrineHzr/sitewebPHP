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
        $categorie = 'cours';
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

if ($nom_c == "Cours de Mathématiques") {
    header("Location: https://www.mathematiquesfaciles.com/cgi2/myexam/liaison.php?liaison=_enfants_");
} elseif ($nom_c == "Cours de Sciences") {
    header("Location:https://www.educatout.com/activites/sciences/index.html");
} elseif ($nom_c == "Cours d'Histoire") {
    header("Location:https://www.storyplayr.com/bibliotheque/age/petits");
} elseif ($nom_c == "Cours de Géographie") {
    header("Location:https://www.educatout.com/activites/complementaires/variees/facons-ludiques-de-faire-apprendre-la-geographie-a-votre-enfant.htm");
} elseif ($nom_c == "Cours de Physique") {
    header("Location:https://www.educatout.com/activites/themes/l-activite-physique--activites-pour-enfants-.htm");
} elseif ($nom_c == "Cours d'Arts") {
    header("Location:https://ebama.ca/cours-pour-enfants/");
} elseif ($nom_c == "Cours de Musique") {
    header("Location:https://www.imusic-school.com/fr/initiation-musicale/");
} elseif ($nom_c == "Cours d'Informatique") {
    header("Location:https://tekkieuni.com/fr/courses/");
} elseif ($nom_c == "Cours de Langues") {
    header("Location:https://www.inlingua.com/fr/cours-de-langue-enfants/#:~:text=Les%20quatre%20diff%C3%A9rents%20programmes%20linguistiques,et%20dans%20une%20atmosph%C3%A8re%20agr%C3%A9able.");
}


$conn->close();
?>
