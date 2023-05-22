<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}
$voornaam = $_POST['txtVoornaam'];
$achternaam = $_POST['txtAchternaam'];
$geboortedatum = $_POST['txtGeboortedatum'];
$email = $_POST['txtEmail'];
$wachtwoord = $_POST['txtWachtwoord'];

require 'database.php';
$sql = "INSERT INTO gebruikers (voornaam, achternaam, geboortedatum, email, wachtwoord)
VALUES ('$voornaam','$achternaam','$geboortedatum','$email','$wachtwoord')";
if (mysqli_query($conn, $sql)) {
    echo 'You have been registered. go to the loginpage to continue: <a href="inloggen.php">login</a>';
    exit;
}
