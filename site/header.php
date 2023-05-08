<?php require 'database.php';
// Construct the SQL query to count the number of rows in the receptie table
$sql = "SELECT COUNT(*) AS num_ingredients FROM receptie";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Fetch the result row as an associative array
$row = mysqli_fetch_assoc($result);

// Extract the value of the num_ingredients column
$num_ingredients = $row['num_ingredients'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franse Eten</title>

    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <div class="header">
        <div style="text-align: center;">
            <p style="font-size: 300%; color:white"> Franse Eten</p>
            <h3 style="color: whitesmoke; text-weight: Bold;"> We have <?php echo $num_ingredients ?> ingredients available.</h3>
            <h1>Onze Recepties Voor </h1>
        </div>
    </div>

</body>

</html>