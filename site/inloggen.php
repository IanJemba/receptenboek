<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="stylesheet1.css">
    <style> body{background-color: yellow;} </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="form">
        <h2>Inloggen;</h2>
        <form action="verwerk-inloggen.php" method="post">
            <Label for="Username"> Username:</Label>
            <input type="text" name="Email"> <br>
            <Label for="Password"> Password:</Label>
            <input type="text" name="password">
            <br>
            <button type="submit" value="submit">Inloggen</button>
            <br>
            <p>Geen account?</p>
            <a href="registration.php">Maak een Account.</a>
    </div>
    </form>

</body>

</html>