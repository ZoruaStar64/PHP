<!doctype html>
<html lang="en">
<head>
        <link rel="stylesheet" href="../../CSS/wheely.css">
    <title>Mr Wheely's Garage</title>
</head>

<body>

<header>
    <div class="container wheely">


    </div>

</header>
<form action="opdracht3H8.php" method="post">
    Merk: <br><br>
    <select name="merk[]">
        <option value="Alles">--Alle merken--</option>
        <option value="AlfaRomeo">Alfa Romeo</option>
        <option value="Audi">Audi</option>
        <option value="Ferrari">Ferrari</option>
        <option value="Fiat">Fiat</option>
        <option value="Mercedes">Mercedes</option>
        <option value="Opel">Opel</option>
        <option value="Volkswagen">Volkswagen</option>
    </select>
    <br><br>
    Minimale prijs: <br><br>
    <input type="number" name="minimumPrijs">
    <br><br>
    Maximale prijs: <br><br>
    <input type="number" name="maximumPrijs">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php


class Auto {

   private $merk = ["Alfa Romeo", "Audi", "Ferrari", "Fiat", "Mercedes", "Opel", "Volkswagen"];
   private $type = "";
   private $prijs = "";
   private $url = "";
   private $snelheid = 0;

    public function geefGas() {
        $this->snelheid = 0;
        if (null) {
            $this->snelheid = $this->snelheid + 5;
        }

    }

    public function rem() {
        $this->snelheid;
        if ($this->snelheid !== 0) {
            $this->snelheid = $this->snelheid - 5;
        }

    }

}

class Autooverzicht {

    private $autoos = [];

    public function voegAutoToe() {
    $this->autoos = $this->autoos + ["Alfa Romeo ", "Audi ", "Ferrari ", "Fiat ", "Mercedes ", "Opel ", "Volkswagen "];

    }

    public function getGefilterdeLijst() {

    }

    public function getAutoLijst() {
        foreach ($this->autoos as $auto) {
            echo $auto;
        }
    }

}

$garageProgramma = new Auto();
$garageProgramma = new Autooverzicht();
$garageProgramma->voegAutoToe();
$garageProgramma->getAutoLijst();


?>
<p><a class='home' href='../../index.php'>Terug naar home</a></p>
<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>
</body>
</html>