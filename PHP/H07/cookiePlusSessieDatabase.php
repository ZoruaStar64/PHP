<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "Gebruiker") {
    echo "<h1>Welkom op deze website " . $_SESSION["user"] ["naam"] . "</h1>";
}
else if (isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "Administrator") {
    echo "<h1>Welkom in de admingedeelte van de website " . $_SESSION["user"] ["naam"] . "</h1>";
    echo  "<p><a href='adminOnlyDatabase.php'>u mag nu naar deze pagina</a></p>";
} else {
    header('location: opdrachtH7Database.php');
}

?>

<head>
    <link rel="stylesheet" href="../../CSS/H7.css">
    <title>PHP H7</title>
</head>

<body>

<p><a href="opdrachtH7Database.php?logout">Klik hier om uit te loggen</a></p>
</body>