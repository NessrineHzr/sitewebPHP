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
        $categorie = 'jeux';
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

if ($nom_c == "Jeu de Memoire") {
    header("Location: https://www.toupty.com/jeu-de-memory.html#gsc.tab=0");
} elseif ($nom_c == "Puzzle") {
    header("Location: https://www.toupty.com/puzzle.html#gsc.tab=0");
} elseif ($nom_c == "Jeu de Maths") {
    header("Location: https://poki.com/fr/math?campaign=16283775116&adgroup=157485402625&extensionid=&targetid=aud-1966070259731:kwd-5001512722&location=9075937&matchtype=e&network=g&device=c&devicemodel=&creative=688795017765&keyword=jeux%20de%20math&placement=&target=&gad_source=1&gclid=Cj0KCQjw5ea1BhC6ARIsAEOG5pw77wa13-Prdp4-2OPfVNHfrznASLZQkAu86-uLw2TUniXcPVsOOqwaAmC8EALw_wcB");
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
