<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 2</h1>";

echo "<p>Welkom bij de tweede opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een kerstboom tekenen met twee loops <br>(alleen de form niet een letterlijke kerstboom met bijvoorbeeld een image)</p>";

$teller = 0;
$star = " * ";
echo "<div style='text-align: center; width: 150px'>";
    for ($loopBreak = 0; $loopBreak < 9; $loopBreak++) {
        $teller++;

    for ($loopSter = 0; $loopSter < 0 + $teller; $loopSter++) {
        echo $star;

    }
        echo "<br>";
}
echo "</div>";


echo "<br>";
echo "<p><a href='h03.php'>Terug naar H3</a><br><a class='home' href='../../index.php'>Terug naar home</a></p>";

?>
</body>
</html>
