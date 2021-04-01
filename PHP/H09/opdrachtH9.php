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

$query = "select * from session where `e-mail` = '$email'";
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
<a href="wimVlecht'sInlogPagina.php">Klik hier om in te loggen als Admin</a>
<a href="opdrachtH9.php?logout">Klik hier om uit te loggen</a>
<h1>Hoofdstuk 7's opdracht</h1>

<p>Welkom bij hoofdstuk 7's opdracht</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    Email&emsp;&emsp;&ensp;&nbsp; <input type="text" name="email" value="">
    <br>
    Wachtwoord <input type="password" name="wachtwoord" value="">
    <br>
    <input type="submit" name="knop" value="verstuur">
</form>




<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H09/h09.php'>Terug naar Hoofdstuk 9</a></p>
<br>


</body>

</html>