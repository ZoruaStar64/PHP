<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 1</h1>";

echo "<p>Welkom bij de eerste opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik met zo min mogelijk code 10 afbeeldingen tonen op het scherm (met een for loop)<br>Daarna moet ik hetzelfde doen maar dan met een Array van afbeeldingen</p>";

echo "<p>de plaatjes hieronder zijn deel van de for loop</p>";

for ($tellerForLoop = 1; $tellerForLoop < 11; $tellerForLoop++) {
    echo "<img src='../../IMG/image" . $tellerForLoop . ".png' width='150px' height='150px'>";
    if ($tellerForLoop === 5) {
        echo "<br>";
    }
}
echo "<p>de plaatjes hieronder zijn deel van de array</p>";

$imageArray = array();

for ($tellerArray = 1; $tellerArray < 11; $tellerArray++) {
    $imageArray[] = "<img src='../../IMG/image" . $tellerArray . ".png' width='150px' height='150px'<br>";

    //echo "<script>console.log($teller2)</script>";
}
foreach ($imageArray as $img) {
    echo $img;
}


echo "<br>";
echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>
