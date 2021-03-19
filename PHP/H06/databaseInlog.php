<html>
<body>
<table>
<?php
require_once('../../PHP/MISC/creds.php');

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$queryOne = "SELECT * FROM docent WHERE doc_naam = 'Piet'";
//$resultSet = $dbh->prepare($queryOne);
//$resultSet->execute();
//JSC($resultSet);
//JSC($resultSet->fetch());

$salt = "Hallo";
$wachtwoordOne = "doetje123";
$wachtwoordOneToSave = hash("sha512", $wachtwoordOne . $salt);
//JSC(strlen($wachtwoordOneToSave));

//$queryInsert = "UPDATE docent SET hash = '" . $wachtwoordOneToSave . "' WHERE doc_naam = 'Piet'";
//JSC($queryInsert);
//$statementOne = $dbh->prepare($queryInsert) or die("Error 1.");
//$statementOne->execute() or die("Error 2.");

$query = "select * from docent where wachtwoord is not NULL";
$statement = $dbh->prepare($query) or die("Error 1.");
$statement->execute() or die("Error 2.");


while ($arraytable = $statement->fetch()) {
    echo "<tr>";
    echo "<td>" . $arraytable[8] . "</td>";
    //echo "<td>" . $arraytable[9] . "</td>";
    echo "</tr>";
    //JSC(array_values($arraytable));

}

$compareArray = [
  "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"

];
//JSC($_POST);
//JSC($compareArray);


//HUISWERK
//How to sanitize input from user before executing query (PHP/SQL)
//Where to compare passwords (databse OR in browser)?
//REFACTOR CODE (samen doen)
$queryEmail = "SELECT * FROM docent WHERE `e-mail` ='" . $_POST["email"] . "'";
$statementThree = $dbh->prepare($queryEmail) or die("Error 1.");
$statementThree->execute() or die("Error 2.");
JSC($results = $statementThree->fetch());
JSC($results["hash"]);
JSC(hash("sha512", $_POST["wachtwoord"] . $salt));
if ($results["hash"] == (hash("sha512", $_POST["wachtwoord"] . $salt))){
    echo "GELIJK!!!!!";
}
JSC($statementThree);
if (array_key_exists($_POST["email"], $compareArray) && $compareArray[$_POST["email"]] === $_POST["wachtwoord"]){
    echo "email bestaat en wachtwoord is correct";
}
/*if ($_POST['email'] = $arraytable[8] && $_POST['wachtwoord'] = $arraytable[9]){
 echo "Welkom";
}
else {
    echo "Sorry, geen toegang!";
}*/

function JSC ($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

/*while ($arraytable = $statement->fetch()) {
    if ($_POST['email'] = $arraytable['e-mail']  && $_POST['wachtwoord'] = $arraytable['wachtwoord']){
        echo "Welkom";
    }
    else {
        echo "Sorry, geen toegang!";
    }
}*/
?>
</table>
</body>
</html>