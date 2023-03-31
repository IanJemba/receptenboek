<?php
require 'database.php';

$sortby = $_GET['sortby'] ?? '';

// Set the SQL sorting clause based on user's choice
if ($sortby === 'langtijd') {
    $sql_sort = "ORDER BY tijd DESC";
} else if ($sortby === 'ingredienten') {
    $sql_sort = "ORDER BY LENGTH(ingredienten) DESC";
} else if ($sortby === 'makkelijk') {
    $sql_sort = "ORDER BY LENGTH(Stap)";
} else {
    $sql_sort = "";
}

$sql = "SELECT * FROM receptie $sql_sort";

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
    <h2>Receptenboek</h2>
    
    <div class="sort-options">
        <p>Sort by:</p>
        <ul>
        <li><a href="?sortby=makkelijk">Makkelijk- Moeilijk</a></li>
            <li><a href="?sortby=ingredienten">Meest Ingredienten</a></li>
            <li><a href="?sortby=langtijd">Langdurende</a></li>
        </ul>
    </div>
    
    <div class="product-list">
        <?php foreach ($all_receptie as $recept) { ?>
            <div class="product">
                <img src="images/<?php echo $recept['image']; ?>" alt="<?php echo $recept['eten']; ?>">
                <h2><?php echo $recept['eten']; ?></h2>
                <p><?php echo $recept['kok']; ?></p>
                <p><?php echo $recept['stap']; ?></p>
            </div>
        <?php } ?>
    </div>

    <?php include 'footer.php'; ?>
</body>


</html>