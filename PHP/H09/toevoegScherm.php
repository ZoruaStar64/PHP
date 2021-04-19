
<?php
session_start();
require_once('../MISC/creds.php');
require_once ('wimVlechtsInlogPagina.php');
require_once ('../MISC/functions.php');

/*try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
// set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}*/

$link = mysqli_connect($host, $user, $pass, $db, $port);
if (mysqli_connect_errno()) {
    echo "connection failed" . mysqli_connect_error();
}


if (isset($_GET["logout"])) {
    session_start();
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
<header>
    <div class="headerContainer">
        <h2 style="color: white; font-size: 30px; padding-left: 350px; padding-top: 20px">Bakkerij Vlecht beheer</h2>
    </div>
</header>
<div class="contentContainer">
    <a href="opdrachtH9.php">Overzicht Gerechten</a>
    <a href="updateScherm.php">Gerechten Gegevens Wijzigen</a>
<h1><?php echo $message ?></h1>




<?php
if (isset($_SESSION["user"])) {
    ?>
    <p>Welkom bij de Product Input Systeem<br>
    voer alstublieft de benodigde gegevens hieronder in over het product/gerecht<br><br></p>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
    Naam&emsp;&emsp;&ensp;&nbsp; <input type='text' name='naam' value=''>
    <br>
    Ingrediënten <input type='text' name='ingredienten' value=''>
    <br>
    Vorm&emsp;&emsp;&ensp;&ensp; <input type='text' name='vorm' value=''>
    <br>
    Gram&emsp;&emsp;&ensp;&nbsp; <input type='number' name='gram' value=''>
    <br>
    Prijs&emsp;&emsp;&emsp;&nbsp; <input type='text' name='prijs' value=''>
    <br>
    ImageUrl&emsp;&nbsp; <input type='text' name='weblink' value=''>
    <br>
    <input type='submit' name='Add' value='verstuur'>
</form>
    <br>
    <a href="toevoegScherm.php?logout">Klik hier om uit te loggen</a>
<?php
}
else {
   echo "<form action='toevoegScherm.php' method='POST'>
        Email&emsp;&emsp;&ensp;&nbsp; <input type='text' name='email' value=''>
        <br>
        Wachtwoord <input type='password' name='wachtwoord' value=''>
        <br>
        <input type='submit' name='knop' value='verstuur'>
</form>";
}



if (isset($_POST["Add"])) {

    if (isset($_POST["naam"])) {
        $naam = $_POST["naam"];
    }

    if (isset($_POST["ingredienten"])) {
        $ingredienten = $_POST["ingredienten"];
    }

    if (isset($_POST["vorm"])) {
        $vorm = $_POST["vorm"];
    }

    if (isset($_POST["gram"])) {
        $gram = $_POST["gram"];
    }

    if (isset($_POST["prijs"])) {
        $prijs = $_POST["prijs"];
    }

    if (isset($_POST["weblink"])) {
        $webLink = $_POST["weblink"];
    }

voegToe($link, $naam, $ingredienten, $vorm, $gram, $prijs, $webLink);


}




?>
</div>
<br>
<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
</body>
</html>