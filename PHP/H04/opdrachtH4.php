<!doctype html>
<html lang="en">
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
$celsius = 2;
$fahrenheit = 0;

if ($celsius > 0 || $celsius < 0) {
echo $celsius . " Celsius = " . (32 + $celsius * 1.8) . " Fahrenheit";
}
else {
    echo $celsius . " Celsius = " . "32 Fahrenheit";
}

echo "<p>Deelopdracht 2</p>";

$hetGetal = 3;
$hetAntwoord = false;

/*if ($hetGetal % 3 == 0) {
    return $hetAntwoord = true;
    echo $hetGetal . " is deelbaar door 3 dus is de return boolean " . $hetAntwoord;
}
else {
    return $hetAntwoord = false;
    echo $hetGetal . " is niet deelbaar door 3 dus is de return boolean " . $hetAntwoord;
}*/


echo "<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H04/h04.php'>Terug naar Hoofdstuk 4</a></p>";

?>
</body>
</html>
