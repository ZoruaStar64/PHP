<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/monkeyBusiness.css">
    <title>Monkey Business</title>
</head>
<body>
<h1>vorm van pagina: (alles moet in het midden van de bekijker's scherm zijn)</h1>
<h2>Monkey Business Logo<br>select your monkey!<br>Image van een aap op een lijn<br>De array van apennamen</h2>

<?php
echo "<p><a href='../../IMG/monkey-business.png'></a></p>";
echo "<h3>select your monkey!</h3>";
echo "<p><a href='../../IMG/monkey_swings.png'></a></p>";

class apenNamen {

   public function links() {
       $namen = ["Baviaan", "Guereza", "Langoer", "Neusaap", "Tamarin", "Brulaap", "Halfaap", "Mandril", "Gorilla", "Chimpanzee", "Orang-Oetan"];

       foreach ($namen as $aapnaam) {
          echo "<p><a class='apenNamen' href='https://www.google.nl/search?q=" . $aapnaam ."&tbm=isch'>" . $aapnaam . "</a></p>";
       }

   }

}

$namenVanApen = new apenNamen();
$namenVanApen->links();

?>
<p><a class='home' href='../../index.php'>Terug naar home</a></p>
<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>
</body>
</html>