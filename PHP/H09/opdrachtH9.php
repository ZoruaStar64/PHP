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

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/bakkerij.css">
    <title>Bakkerij Wim Vlecht</title>
</head>

<body>
<header>
    <div class="headerContainer">
        <h2 style="color: white; font-size: 30px; padding-left: 350px; padding-top: 20px">Bakkerij Vlecht beheer</h2>
    </div>
</header>
<div class="contentContainer">
    <a href="opdrachtH9.php">Overzicht Gerechten</a>
    <a href="toevoegScherm.php">Gerechten toevoegen (alleen voor admins)</a>

<h1>Weergave van alle Gerechten</h1>
<h2>Globale informatie van alle gerechten</h2>

<table class="table">
<?php
require_once('bakkerijGalerij.php');
$items = new itemOverzicht();
foreach ($items->getItemLijst() as $item) {

    echo '<tr>
            <td>' . $item->getNaam() . '</td>
            <td>' . $item->getGewicht() . '</td>
            <td>' . $item->getVorm() . '</td>
            <td><a class="Details" href="details.php?id='. $item->getId() . '">Details</a> </td>
          </tr>';
}
?>

</table>

</div>
<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
<br>


</body>

</html>