<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Extra les PHP Arrays + Loops</title>
</head>
<body>

<?php

//$mijnkast = array();
$mijnKast[0] = "Sokken";
$mijnKast[1] = "Boxers";
$mijnKast[2] = "Zakdoeken";
$mijnKast[3] = "Shirts";

foreach ($mijnKast as $waarde => $label) {
    echo "in lade " . $waarde . " zitten " . $label . "<br>";
}
echo "<p></p>";
$namen = [];
$namen = ["Aap", "Noot", "Mies"];
$namen[] = "Wim";
$namen[] = "Zus";

foreach ($namen as $label) {
    echo  $label . " is hier" .  "<br>";
}
?>
</body>
</html>