<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H2</title>
</head>
<body>
<?php
echo "<h1>Hoofdstuk 2 Opdracht 2</h1>";

echo "<p>Welkom bij hoofdstuk 2's tweede opdracht!</p>";

echo "<p>In deze opdracht moet ik de zin hieronder gaan maken.<br>Mensen die geen fouten maken, werken niet.</p>";

$a = "die geen fout";
$b = "en";
$c = "niet.";

$volledigeZin = "Mens" . $b . " " . $a . $b . " mak" . $b . ", werk" . $b . " " . $c;

echo $volledigeZin;


echo "<p><a href='h02.php'>Terug naar H2</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";


?>
</body>
</html>

