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
    <link rel="stylesheet" href="stylesheet1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
<?php include 'header.php'?>
<?php include 'nav.php' ?>
    <div>
        <?php foreach ($all_receptie as $recept) : ?>
            <div class="container">
                <a href="recept.php?id=<?php echo $recept["number"] ?>">
                    <img src="images/<?php echo $recept['image'] ?>">
                    <h3><?php echo $recept['eten'] ?></h3>
                    <p><span class="material-symbols-outlined">
                            person
                        </span> By <?php echo $recept['kok'] ?> </p>

                </a>

            </div>
        <?php endforeach; ?>
        <?php  include 'footer.php'?>

</body>

</html>