<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H8</title>
</head>
<body>
<h1>Hoofdstuk 8</h1>

<p>Welkom bij hoofdstuk 8's 1ste opdracht!</p>

<p>In deze opdracht moet ik een Radioprogramma klasse maken<br>
Deze klasse heeft 3 attributen (String: Programmanaam), (String: Omschrijving) en (Array: Liedjes)<br>
Deze klasse heeft ook 2 methoden genaamd (getLiedjes: retouneert de Liedjes array)<br>
en (getProgramma: retouneert een array met de twee strings)</p>


<?php
class Radioprogramma {

   public function getLiedjes() {
       $Liedjes = ["bo en - My Time <br>", "Xenoblade Chronicles 2 - Drifting Soul <br>", "Super Mario Odyssey - Jump up, Super Star! <br>", "Bonnie Tyler - Holding out for a hero <br>",
           "Coda - Fighting Gold <br>", "Neon Trees - Moving in the dark <br>", "Greek Fire - A Real Life <br>", "Adventure Time - Come along with me <br>",
           "Steven Universe Future - Being Human <br>", "John Scatman - Scatman's World <br>", "1, 2, 3 / After the Rain <br>",
           "Super Mario Odyssey - Break Free (Lead the Way) <br>", "Freddy Mercury - Don't Stop Me Now <br>", "Phyrnna - A Breeze from Home <br>"];
        foreach ($Liedjes as $Lied) {
            echo $Lied;
        }
    }

    function getProgramma() {
        $Programmanaam = "<h1>Radioprogramma</h1>";
        $Omschrijving = "<h2>Dit programma bevat een lijst met liedjes</h2>";
        echo $Programmanaam;
        echo $Omschrijving;
    }
}

$Radio = new Radioprogramma();
$Radio->getProgramma();
$Radio->getLiedjes();

?>
<p><a class='home' href='../../index.php'>Terug naar home</a></p>
<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>
</body>
</html>