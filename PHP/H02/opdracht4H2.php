<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H2</title>
</head>
<body>
<?php
echo "<h1>Hoofdstuk 2 Opdracht 4</h1>";

echo "<p>Welkom bij hoofdstuk 2's vierde en laatste opdracht!</p>";

echo "<p>In deze opdracht moet ik de zin hieronder gaan maken.<br>De cursus “omgaan met teleurstellingen” kan vanavond helaas niet doorgaan.</p>";

$a = "\"omgaan";
$b = "met";
$c = "teleu";

$volledigeZin = "De cursus " . $a . " " . $b . " " . $c . "rstelligen\" " . "kan vanavond helaas niet doorgaan.";

echo $volledigeZin;


echo "<p><a href='h02.php'>Terug naar H2</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";


?>
</body>
</html>

