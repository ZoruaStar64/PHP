<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H3</title>
</head>
<body>

<?php
echo "<h1>Hoofdstuk 3 Opdracht 7</h1>";

echo "<p>Welkom bij de zesde opdracht van Hoofdstuk 3!</p>";

echo "<p>In deze opdracht moet ik een stukje van een programma toevoegen voor een kappersalon</p>";

$kappersagenda["9:15"] = "Mevr.Pietersen";
$kappersagenda["9:30"] = "Mevr.Willems";
$kappersagenda["9:45"] = "";
$kappersagenda["10:00"] = "Paul van den Broek";
$kappersagenda["10:15"] = "Karel de Meeuw";
$kappersagenda["10:30"] = "";


print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
if($afspraak == "") {
print("<li>".$tijd."</li>") ;
    }
}
print("</ul>");

?>
</body>
</html>

