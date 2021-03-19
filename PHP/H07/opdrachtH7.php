<?php
session_start();

$users = array(
    "ikbengebruiker@test.hall" => array("wachtwoord" => "degebruikerswachtwoord7390", "rol" => "Gebruiker"),
    "ikbendeadministratorhier@test.krol" => array("wachtwoord" => "mijnwachtwoordissupergeheim9471034", "rol" => "Administrator")

);

if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($users[$_POST["email"]])
    && $users[$_POST["email"]] ["wachtwoord"] == $_POST['wachtwoord']) {
    $_SESSION["user"] = array("naam" => $_POST["email"],
        "wachtwoord" => $users[$_POST["email"]] ['wachtwoord'],
        "rol" => $users[$_POST["email"]] ['rol']);

    $message = "Welkom " . $_SESSION["user"] ["naam"] . " met de rol " . $_SESSION["user"] ["rol"];
} else {
    $message = "Inloggen";
}

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/H7.css">
    <title>PHP H7</title>
</head>
<body>

<h1>Hoofdstuk 7's opdracht</h1>

<p>Welkom bij hoofdstuk 7's opdracht</p>

<p>In deze opdracht moet ik een formulier maken met daarin invulvelden voor
    <br>een e-mail adres, een wachtwoord en een submit knop<br>
    er is een e-mail en wachtwoord voor een gebruiker en een voor een admin<br>
zodra je ingelogd bent wordt jouw naam en rol weergeven op het scherm<br>
    en een link naar een "admin" pagina verschijnt<br>
zonder admin rol dan zegt het dat je geen toegang hebt als je wel de rol hebt dan verwelkomt het jouw</p>

<p>De normale gebruiker's e-mail + wachtwoord zijn: ikbengebruiker@test.hall || degebruikerswachtwoord7390<br>
en die van de admin is dan: ikbendeadministratorhier@test.krol || mijnwachtwoordissupergeheim9471034</p>

<h1><?php echo $message; ?></h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    Email&emsp;&emsp;&ensp;&nbsp; <input type="text" name="email" value="">
    <br>
    Wachtwoord <input type="password" name="wachtwoord" value="">
    <br>
    <input type="submit" name="knop" value="verstuur">
</form>

<p><a href="cookiePlusSessie.php">Als u ingelogd bent klik hier</a></p>
<p><a href="opdrachtH7.php?logout">Klik hier om uit te loggen</a></p>

<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H07/h07.php'>Terug naar Hoofdstuk 7</a></p>
<br>


</body>

</html>