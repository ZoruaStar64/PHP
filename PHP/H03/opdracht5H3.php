<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 5</h1>";

echo "<p>Welkom bij de vijfde opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een programma schrijven met minstens 1 variabele<br>deze programma gaat over een busreis die 10 euro kost<br>ouderen boven 65 jaar krijgt 50% korting, hetzelfde geldt voor kinder van 12 jaar of jonger<br>en kinderen onder 3 jaar mogen gratis</p>";

$leeftijd = "80";
$euro = 10;

if ($leeftijd < 3) {
    $euro = $euro * 0;
}
if ($leeftijd >= 3 && $leeftijd <= 12) {
    $euro = $euro * 0.5;
}
if ($leeftijd > 12 && $leeftijd < 66) {
    $euro = $euro * 1;
}
if ($leeftijd > 65) {
    $euro = $euro * 0.5;
}

echo "<p>De leeftijd is op 80 als voorbeeld hieronder</p>";
echo "<p>In mijn github staat de code waarin de leeftijd/geld uitreken code staat</p>";

echo $euro . " euro";

echo "<br>";
echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>