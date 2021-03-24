<!doctype html>
<html lang="en">
<head>
        <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Mr Wheely's Garage</title>
</head>
<body>

<?php


class Auto {

   private $merk = ["Audi", "Ferrari", "Fiat", "Mercedes", "Opel", "Volkswagen"];
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

    private $autoos = [""];

    public function voegAutoToe() {

    }

    public function getGefilterdeLijst() {

    }

    public function getAutoLijst() {

    }

}


?>
<p><a class='home' href='../../index.php'>Terug naar home</a></p>
<p><a class='home' href='../../PHP/H08/h08.php'>Terug naar H8</a></p>
</body>
</html>