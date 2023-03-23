<?php
require 'database.php';

include 'header-footer.php';
$id = $_GET['id'];
$sql = "SELECT * FROM receptie WHERE number = $id";
$result = mysqli_query($conn, $sql);
$recept= mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>De receptie</title>
  <link rel="stylesheet" href="site/style.css">
</head>

<body>
 <div class="container">
  <div class="header1">
    <h1><?php echo $recept['eten'] ?></h1>
    <img src="images/<?php echo $recept['Image'] ?>" alt="pic">
  </div>
  
  <div class="box">
    <h2>Ingrediënten</h2>
    <ul>
    <?php 
    $separate = $recept['ingredienten'];
    $array = explode(",", $separate);
    foreach ($array as $ingredient) 
    {
        echo "<li>$ingredient</li>";
    }
    ?>
    </ul>
  </div>

  <div class="box">
    <h2>Bereidingswijze</h2>
    <p><?php echo $recept['Stap'] ?></p>
  </div>
</div>


</body>

</html>