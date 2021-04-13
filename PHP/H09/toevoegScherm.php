<?php
session_start();
require_once('../../PHP/MISC/creds.php');

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
// set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}
require_once ('toevoegScherm.php');
if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_SESSION["user"])) {
    $message = "Welkom " . $_SESSION["user"] ["naam"];
}
else {
    $message = "U moet nog inloggen om broodjes te kunnen toevoegen";
}

if (isset($_SESSION["user"])) {
    ?>
    <p>Welkom bij de Product Input Systeem<br>
    Zorg er alstublieft voor dat u bij ProductId goed kijkt hoeveelste product het wordt<br>
    Op die manier gebeurt er niks onverwachts met de website b.v.b<br>
    dat er twee producten met de Id 3 zijn<br>
    anders zou dit handmatig in de database aangepast moeten worden</p>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
    Naam&emsp;&emsp;&ensp;&nbsp; <input type='text' name='naam' value=''>
    <br>
    Ingrediënten <input type='text' name='ingredienten' value=''>
    <br>
    Vorm <input type='text' name='vorm' value=''>
    <br>
    Gram <input type='text' name='gram' value=''>
    <br>
    Prijs <input type='text' name='prijs' value=''>
    <br>
    ImageUrl <input type='text' name='url' value=''>
    <br>
    ProductId <input type='text' name='id' value=''>
    <br>
    <input type='submit' name='knop' value='verstuur'>
</form>;

<?php
}
?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/bakkerij.css">
    <title>Bakkerij Wim Vlecht</title>
</head>
<body>
<a href="wimVlecht'sInlogPagina.php">Klik hier om in te loggen als Admin</a>
<a href="toevoegScherm.php?logout">Klik hier om uit te loggen</a>
<h1><?php echo $message ?></h1>

<p>Welkom bij hoofdstuk 9's opdracht (dit tekst komt niet voor zodra ik verder in de opdracht ben)</p>


<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
<br>


</body>

</html>