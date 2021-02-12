<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 6</h1>";

echo "<p>Welkom bij de zesde opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een programma schrijven<br>die een plaatje weergeeft voor elke 5 zwemmers in een club</p>";

$zwemclub["De spartelkuikens"] = 25;
$zwemclub["De waterbuffels"] = 32;
$zwemclub["Plonsmderin"] = 11;
$zwemclub["Bommetje"] = 23;





echo "<div style='border: black 3px solid; width: 300px; height: 96px'>";
foreach ($zwemclub as $label => $aantal) {
if ($aantal % 5) {
    $zwemimage[] = "<img style='width: 20px; height: 20px' src='../../IMG/tada.gif'</img>";
}
    echo "<div style='border: black 3px solid; width: 150px; float:left;'>" . $label . "</div>" . "   " . "<div style='border: black 3px solid; width: 30px; float: left'>" . $aantal . "</div>" . $zwemimage  . "<br>";
}
echo "</div>";

echo "<br>";
echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>
