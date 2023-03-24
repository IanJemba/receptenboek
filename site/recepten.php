<?php
require 'database.php';

$sql = "SELECT * FROM receptie";
$result = mysqli_query($conn, $sql);
$all_receptie = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptenboek</title>
    <link rel="stylesheet" href="css/stylesheet1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="header">
        <div style="text-align: center;">
            <p style="font-size: 300%; color:white"> Franse Eten</p>
            <h1>Onze Recepties Voor </h1>
        </div>
    </div>

    <div>
        <?php foreach ($all_receptie as $recept) : ?>
            <div class="container">
                <a href="recept.php?id=<?php echo $recept["number"] ?>">
                    <img src="images/<?php echo $recept['Image'] ?>">
                    <h2><?php echo $recept['eten'] ?></h2>
                    <p><span class="material-symbols-outlined">
                            person
                        </span> By <?php echo $recept['kok'] ?> </p>

                </a>

            </div>
        <?php endforeach; ?>
        <footer>
            <div class="footer">
                <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:x-large;  text-align:center; color:white"> ©fransevoorjou</p>
                <ul style="color: blue;">
                    <li>Contact</li>
                    <li>Service </li>
                </ul>
            </div>
        </footer>

</body>

</html>