<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 3</h1>";

echo "<p>Welkom bij de derde opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een While loop in een For loop veranderen </p>";

echo "<p>Dit is de for loop</p>";

$x = 35;
    for ($x = 35; $x >= 25; $x--) {
        echo "hoppelepee";
        echo "<br>";
    }

echo "<p>Dit is de while loop <br>(de while loop hoort met x te zijn maar sinds ik het bij de for loop gebruik doe ik het met een y)</p>";

    $y = 35;
    while ($y >= 25) {
        echo "hoppelepee";
        echo "<br>";
        $y--;
    }


echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>
