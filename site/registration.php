<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet1.css">
    <style>
        body {
            background-color: yellow;
        }
        .form{
            margin-left: 200px;
        }
    </style>
    <title>Registreren</title>
</head>

<body>
    <?php include 'header.php' ?>
    <form action="registeer.php" method="post">
        <div class="form">
            <h2>Registratie</h2>
            <ul>
                <li>
                    <label for="txtVoornaam">Voornaam</label><br>
                    <input type="text" id="txtVoornaam" name="txtVoornaam" placeholder="Voornaam" autofocus>
                </li>
            </ul>
            <ul>
                <li>

                    <label for="txtAchternaam">Achternaam</label><br>
                    <input type="text" id="txtAchternaam" name="txtAchternaam" placeholder="Achternaam" autofocus>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtGeboortedatum">Geboortedatum</label><br>

                    <input type="date" id="txtGeboortedatum" name="txtGeboortedatum" placeholder="Geboortedatum" autofocus>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtEmail">E-mail</label><br>
                    <input type="text" id="txtEmail" name="txtEmail" placeholder="example@email.com" autofocus>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="txtWachtwoord">Wachtwoord</label><br>
                    <input type="text" id="txtWachtwoord" name="txtWachtwoord" placeholder="Wachtwoord.." autofocus>
                </li>
            </ul>
            <div>
                <li class="sub">
                    <button type="submit" value="Submit">Registeer</button>
                </li>
            </div>
        </div>
    </form>

</body>

</html>