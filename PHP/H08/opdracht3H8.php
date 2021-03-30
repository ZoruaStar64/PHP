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
<div class="inhoud-container">
<form action="opdracht3H8.php" method="get">

    <label class="form-control">Merk:<br></label>
    <select class="form-control"
            name="merk[]">

        <option value="Alles">--Alle merken--</option>
        <option value="AlfaRomeo">Alfa Romeo</option>
        <option value="Audi">Audi</option>
        <option value="Ferrari">Ferrari</option>
        <option value="Fiat">Fiat</option>
        <option value="Mercedes">Mercedes</option>
        <option value="Opel">Opel</option>
        <option value="Volkswagen">Volkswagen</option>
        <option value="Tesla">Tesla</option>
    </select>
    <br><br>
    <label class="form-control">Minimale Prijs:</label>

    <input class="form-control" type="text" name="minimumPrijs">
    <br><br>
    <label class="form-control">Maximale Prijs:</label>
    <input class="form-control" type="text" name="maximumPrijs" >
    <br><br>
    <input class="form-control" style="width: 100px" type="submit" value="Submit">
    <br>
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
echo '<div class="auto-houder">';
foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $AutoMerk) as $auto) {

        echo '<div class="wheely-img" style="background-image: url(' . $auto->getUrl() . ')">
        <h5>Merk: ' . $auto->getMerk() . ' <br> Prijs: &euro; ' . $auto->getPrijs() . '</h5>
        </div>';
}
echo '</div>';
 echo "<p><a class='home' href='../../index.php'>Terug naar home</a></p>";
 echo "<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>";

?>
</div>

</body>
</html>