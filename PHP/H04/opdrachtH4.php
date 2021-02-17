<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H4</title>
</head>
<body>
<?php
echo "<h1>Hoofdstuk 4's opdracht</h1>";

echo "<p>In deze opdracht moet ik:<br>1: een functie schrijven die als argument een waarde in celsius accepteerd en het dan in Fahrenheit weergeeft.<br>
2: een functie schrijven die bepaalt of een getal deelbaar door 3 is en returned het als een boolean (true or false)<br>
3: en als laatste een functie schrijven die een string accepteert als argument en het dan in de omgekeerde volgorde returned</p>";

echo "<p>Deelopdracht 1</p>";

function celToFah() {
    $celsius = 3;
    $fahrenheit = 32 + $celsius * 1.8;
    if ($celsius > 0 || $celsius < 0) {
        echo $celsius . " Celsius = " . $fahrenheit . " Fahrenheit";
    } else {
        echo $celsius . " Celsius = " . "32 Fahrenheit";
    }
}

celToFah();

echo "<p>Deelopdracht 2</p>";
$hetAntwoord = null;
$hetGetal = 6;

function waarOfNietWaar($hetAntwoord, $hetGetal) {
    if ($hetGetal % 3 == 0) {
        $hetAntwoord = true;
        echo $hetGetal . " is deelbaar door 3 dus is de return boolean " . $hetAntwoord . " (True)";
        echo "<br>" . "Anders was het getal van de boolean 0 (False)";
        return $hetAntwoord;
    }
    else {
        $hetAntwoord = false;
        echo $hetGetal . " is niet deelbaar door 3 dus is de return boolean " . $hetAntwoord . " (False)" ;
        echo "<br>" . "Anders was het getal van de boolean 1 (True)";
        return $hetAntwoord;
    }
}
waarOfNietWaar($hetAntwoord, $hetGetal);

echo "<p>Deelopdracht 3</p>";

$deString = "Hallo";
echo "De string is nu " . $deString . "<br>";
function ReversalStringundos($deString) {
    return strrev($deString);
}
    echo "Maar nu is de string " . ReversalStringundos($deString) . "!";


echo "<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H04/h04.php'>Terug naar Hoofdstuk 4</a></p>";

?>

</body>
</html>
