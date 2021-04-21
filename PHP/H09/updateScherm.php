<?php
session_start();
require_once('../MISC/creds.php');
require_once ('wimVlechtsInlogPagina.php');
require_once ('../MISC/functions.php');


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
    <a href="toevoegScherm.php">Gerechten Toevoegen</a>
    <h1><?php echo $message ?></h1>




    <?php
    if (isset($_SESSION["user"])) {
        ?>
        <p>Welkom bij de Product Update Systeem<br>
            voer alstublieft de benodigde gegevens in het vak met het id van een bestaand product/gerecht<br><br></p>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&ensp; <input type="number" name="id" value="">
            <br>
            Naam&emsp;&emsp;&ensp;&nbsp; <input type='text' name='naam' value=''>
            <br>
            <input type='submit' name='updateNaam' value='Update de naam'>
        </form>

        <br>

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&ensp; <input type="number" name="id" value="">
            <br>
            Ingrediënten <input type='text' name='ingredienten' value=''>
            <br>
            <input type='submit' name='updateIngredienten' value='Update de ingredienten'>
        </form>

        <br>

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&ensp; <input type="number" name="id" value="">
            <br>
            Vorm&emsp;&emsp;&ensp;&ensp; <input type='text' name='vorm' value=''>
            <br>
            <input type='submit' name='updateVorm' value='Update de vorm'>
        </form>

        <br>

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&nbsp; <input type="number" name="id" value="">
            <br>
            Gram&emsp;&emsp;&ensp;&nbsp; <input type='number' name='gram' value=''>
            <br>
            <input type='submit' name='updateGewicht' value='Update het gewicht'>
        </form>

        <br>

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&nbsp; <input type="number" name="id" value="">
            <br>
            Prijs&emsp;&emsp;&emsp;&nbsp; <input type='text' name='prijs' value=''>
            <br>
            <input type='submit' name='updatePrijs' value='Update de prijs'>
        </form>

        <br>

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
            ID&emsp;&emsp;&emsp;&emsp;&nbsp; <input type="number" name="id" value="">
            <br>
            ImageUrl&emsp;&nbsp; <input type='text' name='weblink' value=''>
            <br>
            <input type='submit' name='updateImage' value='Update de Image'>
        </form>

        <br>

        <br>
        <a href="updateScherm.php?logout">Klik hier om uit te loggen</a>
        <?php
    }
    else {
        echo "<form action='updateScherm.php' method='POST'>
        Email&emsp;&emsp;&ensp;&nbsp; <input type='text' name='email' value=''>
        <br>
        Wachtwoord <input type='password' name='wachtwoord' value=''>
        <br>
        <input type='submit' name='knop' value='verstuur'>
</form>";
        //inLogFormulier($link);
    }



    if (isset($_POST["updateNaam"])) {
        if (isset($_POST["naam"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $naam = $_POST["naam"];
        }
        editName($link, $naam, $id);
    }

    if (isset($_POST["updateIngredienten"])) {
        if (isset($_POST["ingredienten"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $ingredienten = $_POST["ingredienten"];
        }
        editIngredienten($link, $ingredienten, $id);
    }

    if (isset($_POST["updateVorm"])) {
        if (isset($_POST["vorm"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $vorm = $_POST["vorm"];
        }
        editVorm($link, $vorm, $id);
    }

    if (isset($_POST["updateGewicht"])) {
        if (isset($_POST["gram"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $gram = $_POST["gram"];
        }
        editGewicht($link, $gram, $id);
    }

    if (isset($_POST["updatePrijs"])) {
        if (isset($_POST["prijs"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $prijs = $_POST["prijs"];
        }
        editPrijs($link, $prijs, $id);
    }

    if (isset($_POST["updateImage"])) {
        if (isset($_POST["weblink"]) && $_POST["id"]) {
            $id = $_POST["id"];
            $webLink = $_POST["weblink"];
        }
        editImage($link, $webLink, $id);
    }





    ?>
</div>
<br>
<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
</body>
</html>