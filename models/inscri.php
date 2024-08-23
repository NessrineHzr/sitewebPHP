<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email) {
        // You can save the email to your database or send a confirmation email
        // For demonstration, we will just echo a success message
        echo "Merci de vous être abonné à notre newsletter avec l'adresse e-mail : " . htmlspecialchars($email);
    } else {
        echo "Veuillez entrer une adresse e-mail valide.";
    }
} else {
    echo "Méthode de requête non valide.";
}
?>
<?php
include '../controllers/connection.php';
global $conn;

$email = $_POST['email'];

$query = "INSERT INTO newsletter (email)
            VALUES ('$email')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "       Mail enregistré avec succès.   ";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

