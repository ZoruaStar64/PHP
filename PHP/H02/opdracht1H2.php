<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H2</title>
</head>
<body>
<?php
echo "<h1>Hoofdstuk 2 Opdracht 1</h1>";

echo "<p>Welkom bij hoofdstuk 2's eerste opdracht!</p>";

echo "<p>In deze opdracht moet ik de zin hieronder gaan maken.<br>Ik heb niet gefaald. Ik heb alleen 10000 manieren gevonden die niet werken.</p>";

$a = "Ik heb niet gefaald";
$b = "die niet werken";
$c = 10000;

$volledigeZin = $a . "." . " Ik heb alleen " . $c . " manieren gevonden " . $b . ".";

echo $volledigeZin;


echo "<p><a href='h02.php'>Terug naar H2</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";


?>
</body>
</html>

