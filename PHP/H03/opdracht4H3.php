<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
    <style>
        .moveToRight {
            margin-left: 80px;
            border: red 3px solid
        }
    </style>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 4</h1>";

echo "<p>Welkom bij de vierde opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een pagina namaken<br>9 plaatjes die een kleur rondom hebben<br>(op deze volgorde: Groen,Rood,Groen,Rood)</p>";

echo "<div style='align-content: center; width: 780px'>";
for ($teller = 1; $teller < 10; $teller++) {

    if ($teller === 6) {
        echo "<br>";
    }
    if ($teller === 1 || $teller === 3 || $teller === 5 || $teller === 7 || $teller === 9 ) {
        echo "<img style='border: green 3px solid' src='../../IMG/imageResultaatMap/image" . $teller . ".png' width='150px' height='150px'>";

    }
    if ($teller === 2 || $teller === 4 || $teller === 8) {
        echo "<img style='border: red 3px solid' src='../../IMG/imageResultaatMap/image" . $teller . ".png' width='150px' height='150px'>";
    }
    if ($teller === 6) {
        $class = "class='moveToRight'";
        echo "<img " .$class.  "src='../../IMG/imageResultaatMap/image" . $teller . ".png' width='150px' height='150px'>";
    }
}
echo "</div>";


echo "<br>";
echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>

