<?php 
if (isset($_SESSION['email'])) {
    header("Location: ../view/compte.php");
} else {
    header("Location: ../view/login.php");}

?>
