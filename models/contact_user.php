<?php
    include '../controllers/connection.php';
    
    global $conn;
    global $to;
    global $subject;
    global $message;
    global $headers;

    $prenom_c = $_POST['prenom_c'];
    $mail_c = $_POST['mail_c'];
    $sujet_c = $_POST['sujet_c'];
    $msg_c = $_POST['msg_c'];

    $query = "INSERT INTO contact (prenom_c, mail_c, sujet_c, msg_c) 
    VALUES ('$prenom_c', '$mail_c', '$sujet_c', '$msg_c')";

$result = mysqli_query($conn, $query);



$to = 'nessrinehazza000@gmail.com';
$subject = $sujet_c;
$message = $msg_c;
$headers = 'From: nessrinehazzar000@gmail.com';

mail($to, $subject, $message, $headers);

?>
