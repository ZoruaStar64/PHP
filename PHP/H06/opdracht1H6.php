<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Opdracht 1 H6</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>Opdracht 1 H6</h1>
<p>de * betekent een disclaimer dus belangrijke info over gegevens (geldt voor tekst hieronder)</p>
<p>In deze opdracht maak ik connectie met een database<br>
en zorg ik ervoor dat je in een tabel alle gegevens van cursisten kan zien<br>
*dit zijn allemaal nepgegevens en worden dus nergens anders gebruikt*<br>
*behalve bij toekomstige opdrachten*</p>

<table>

<?php
require_once ('creds.php');

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
    // set the PDO error mode to exception
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = "select * from cursist";
$statement = $dbh->prepare($query) or die("Error 1.");
$statement->execute() or die("Error 2.");


while ($arraytable = $statement->fetch()) {
    echo "<tr>";
    echo "<td>" . $arraytable['cursistnr'] . "</td>";
    echo "<td>" . $arraytable['naam'] . "</td>";
    echo "<td>" . $arraytable['roepnaam'] . "</td>";
    echo "<td>" . $arraytable['straat'] . "</td>";
    echo "<td>" . $arraytable['postcode'] . "</td>";
    echo "<td>" . $arraytable['plaats'] . "</td>";
    echo "<td>" . $arraytable['geslacht'] . "</td>";
    echo "<td>" . $arraytable['geb_datum'] . "</td>";
    echo "</tr>";
}


?>

</table>

<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H06/h06.php'>Terug naar Hoofdstuk 6</a></p>


</body>
</html>