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
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

//$role = $_POST['role'];

$query = "select * from u3651p69583_sander.session where `e-mail` = '$email'";
$statement = $dbh->prepare($query) or die("Error 1.");
$statement->execute() or die("Error 2.");

while ($arraytable = $statement->fetch()) {

    $trueEmail = $arraytable[0];
    $trueWachtwoord = $arraytable[1];
    $trueRole = $arraytable[2];

}


if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    //&& isset($trueEmail[$_POST["email"]])
    && $email == $trueEmail && $wachtwoord == $trueWachtwoord) {
    $_SESSION["user"] = array("naam" => $trueEmail,
        "wachtwoord" => $trueWachtwoord,
        "role" => $trueRole);

    $message = "Welkom " . $_SESSION["user"] ["naam"] . " met de rol " . $_SESSION["user"] ["role"];
} else if ($email !== $trueEmail && $wachtwoord !== $trueWachtwoord) {
    $message = "Deze combinatie van gegevens komen niet voor in de database probeer het opnieuw!";
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
<p>dit is een alternatieve versie van deze opdracht waarbij ik een database gebruik inplaats van een array</p>

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

<p><a href="cookiePlusSessieDatabase.php">Als u ingelogd bent klik hier</a></p>
<p><a href="opdrachtH7Database.php?logout">Klik hier om uit te loggen</a></p>

<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H07/h07.php'>Terug naar Hoofdstuk 7</a></p>
<br>


</body>

</html>