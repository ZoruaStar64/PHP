<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/monkeyBusiness.css">
    <title>Monkey Business</title>
</head>
<body>

<?php
echo "<p><img src='../../IMG/monkey-business.png'></p>";
echo "<h1>select your monkey!</h1>";
echo "<img src='../../IMG/monkey_swings.png'>";

class apenNamen {


   public function links() {
       $namen = ["Baviaan", "Guereza", "Langoer", "Neusaap", "Tamarin", "Brulaap", "Halfaap", "Mandril", "Gorilla", "Chimpanzee", "Orang-Oetan", "Mensaap", "Spinaap"];

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