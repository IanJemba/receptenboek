<?php
require 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM receptie WHERE number = $id";
$result = mysqli_query($conn, $sql);
$recept = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>De receptie</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php' ?>

  <div class="container">
    <div class="header1">
      <h1><?php echo $recept['eten'] ?></h1>
      <img src="images/<?php echo $recept['image'] ?>" alt="pic">
      <div class="ingredients">
        <h2>Ingrediënten</h2>
        <ul>
          <?php
            $separate = $recept['ingredienten'];
            $array = explode(",", $separate);
            foreach ($array as $ingredient) {
              echo "<li>$ingredient</li>";
            }
          ?>
        </ul>
      </div>
    </div>

    <div class="box">
      <h2>Bereidingswijze</h2>
      <p><?php echo $recept['stap'] ?></p>
    </div>

    <div class="box">
      <h2>Tips Voor Uw</h2>
      <p><?php echo $recept['tip'] ?></p>
    </div>
  </div>

  <?php include 'footer.php' ?>
</body>

</html>
