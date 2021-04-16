
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
    Prijs&emsp;&emsp;&emsp;&nbsp; <input type='number' name='prijs' value=''>
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

/*    $querypt1 = "SELECT * FROM u3651p69583_inlog.bakkerij";
    $statement1 = $dbh->prepare($querypt1) or die("Error 1.");
    $statement1->execute() or die("Error 2.");

    while ($arraytable = $statement1->fetch()) {

    echo $arraytable[1];

    }*/

voegToe($link, $naam, $ingredienten, $vorm, $gram, $prijs, $webLink);

/*    $query = "INSERT INTO u3651p69583_inlog.bakkerij(naam, ingredienten, vorm, gram, prijs, webLink) VALUE (?, ?, ?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($link, $query);
    $stmt1->bind_param("sssiis", $naam, $ingredienten, $vorm, $gram, $prijs, $webLink);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
   else {
       mysqli_stmt_execute($stmt1);

       echo mysqli_stmt_error($stmt1);
       mysqli_stmt_close($stmt1);
   }
    $assets = [$naam, $ingredienten, $vorm, $gram, $prijs, $webLink];
    echo "De volgende gegevens zijn toegevoegd aan de database met een nieuwe ID";
    foreach ($assets as $asset) {
        echo "<br>";
        echo $asset;
        echo "<br>";
    }*/
}




?>
</div>
<br>
<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
</body>
</html>