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