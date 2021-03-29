<!doctype html>
<html lang="en">
<head>
        <link rel="stylesheet" href="../../CSS/wheely.css">
    <title>Mr Wheely's Garage</title>
</head>
<body>
<header>
    <div class="container wheely"></div>
</header>

<form action="opdracht3H8.php" method="get">
    Merk: <br><br>
    <select name="merk[]">
        <option value="Alles">--Alle merken--</option>
        <option value="AlfaRomeo">Alfa Romeo</option>
        <option value="Audi">Audi</option>
        <option value="Ferrari">Ferrari</option>
        <option value="Fiat">Fiat</option>
        <option value="Mercedes">Mercedes</option>
        <option value="Opel">Opel</option>
        <option value="Volkswagen">Volkswagen</option>
    </select>
    <br><br>
    Minimale Prijs:
    <br><br>
    <input type="number" name="minimumPrijs">
    <br><br>
    Maximale Prijs:
    <br><br>
    <input type="number" name="maximumPrijs">
    <br><br>
    <input type="submit" value="Submit">
    <br><br>
</form>

<?php

require ('Auto.php');

$autoos = new Autooverzicht();
//$autoos->voegAutoToe('Ferrari', 122500.00, '../../IMG/wheelys/ferrari2.png');

if (isset($_GET['merk']) && !empty($_GET['merk'])) {
    $AutoMerk = implode('',$_GET['merk']);
} else {
    $AutoMerk = "Alles";
}

if (isset($_GET['minimumPrijs']) && !empty($_GET['minimumPrijs'])) {
    $minPrijs = $_GET['minimumPrijs'];
} else {
    $minPrijs = 0;
}

if (isset($_GET['maximumPrijs']) && !empty($_GET['maximumPrijs'])) {
    $maxPrijs = $_GET['maximumPrijs'];
} else {
    $maxPrijs = 99999999999999;
}

/*foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $AutoMerk) as $auto) {
        echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';
        echo '<img src="' . $auto->getUrl() . '" alt="plaatje van auto">';
}*/

foreach ($autoos->getGefilterdeLijst($AutoMerk) as $auto) {
    echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';
    echo '<img src="' . $auto->getUrl() . '" alt="plaatje van auto">';
}

?>
<p><a class='home' href='../../index.php'>Terug naar home</a></p>
<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>
</body>
</html>