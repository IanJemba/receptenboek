<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"){
  header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
  // echo "verkeerde request method gebruikt";
  include '405.php';
  exit;
}

require 'database.php';
$wachtwoord = $_POST["password"];
$email = $_POST["Email"];
$sql = "SELECT * FROM gebruikers WHERE email = '$email'";


$result = mysqli_query($conn,$sql);
  //zolang een rij gevuld kan worden wordt de loop uitgevoerd
$gebruiker = mysqli_fetch_assoc($result);




if (!is_array($gebruiker)){
    header("location: inloggen.php");
    exit;
}

if($gebruiker['wachtwoord'] === $_POST['password']){

  session_start();

  $_SESSION['isIngelogd'] = true;
  $_SESSION['E-mail'] = $gebruiker ['email'];



  header("location: index.php");
  exit;

}

header("location: inloggen.php");
exit;