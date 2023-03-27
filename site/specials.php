<?php
require 'database.php';


$sql = "SELECT * FROM receptie ORDER BY tijd DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$langdurende = mysqli_fetch_assoc($result);


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

    <!-- Display the recipe with the longest time -->
    <div class="container">
        <a href="DeReceptie.php?id=<?php echo $langdurende["number"] ?>">
            <img src="images/<?php echo $langdurende['Image'] ?>">
            <h2><?php echo $langdurende['eten'] ?></h2>
            <p><span class="material-symbols-outlined">
                    person
                </span> By <?php echo $langdurende['kok'] ?> </p>

        </a>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>