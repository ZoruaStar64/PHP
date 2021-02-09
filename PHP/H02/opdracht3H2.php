<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H2</title>
</head>
<body>
<?php
echo "<h1>Hoofdstuk 2 Opdracht 3</h1>";

echo "<p>Welkom bij hoofdstuk 2's derde opdracht!</p>";

echo "<p>In deze opdracht moet ik de zin hieronder gaan maken.<br>Try and fail, but never fail to try.</p>";

$a = "ry";
$b = ", but";
$c = "fail";

$volledigeZin = "T" . $a . " and " . $c . $b . " never " . $c . " to t" . $a . ".";

echo $volledigeZin;


echo "<p><a href='h02.php'>Terug naar H2</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";


?>
</body>
</html>

