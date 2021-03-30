<?php

class Auto {

    private $merk;
    private $prijs;
    private $url;
    private $Alles;
    /*private $type;*/

    public function __construct($merk, $prijs, $url, $Alles) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->url = $url;
        $this->Alles = $Alles;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getAlles() {
        return $this->Alles;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function  setAlles($Alles) {
        $this->Alles = $Alles;
    }

}

class Autooverzicht {

    private $autoos;

    public function __construct() {
        $this->autoos = [
            new Auto('AlfaRomeo', 119980.00, '../../IMG/wheelys/ar1.png', 'Alles'), //Quadrifoglio
            new Auto('AlfaRomeo', 45250.00, '../../IMG/wheelys/ar2.png', 'Alles'), //Giulia

            new Auto('Audi', 102500.00, '../../IMG/wheelys/audi1.png', 'Alles'),
            new Auto('Audi', 108250.00, '../../IMG/wheelys/audi2.png', 'Alles'),

            new Auto('Ferrari', 99500.00, '../../IMG/wheelys/ferrari1.png', 'Alles'),
            new Auto('Ferrari', 122500.00, '../../IMG/wheelys/ferrari2.png', 'Alles'),
            new Auto('Ferrari', 152500.00, '../../IMG/wheelys/ferrari3.png', 'Alles'),

            new Auto('Fiat', 10500.00, '../../IMG/wheelys/fiat1.png', 'Alles'),
            new Auto('Fiat', 11500.00, '../../IMG/wheelys/fiat2.png', 'Alles'),

            new Auto('Mercedes', 82500.00, '../../IMG/wheelys/mercedes1.png', 'Alles'),
            new Auto('Mercedes', 132700.00, '../../IMG/wheelys/mercedes2.png', 'Alles'),
            new Auto('Mercedes', 87500.00, '../../IMG/wheelys/mercedes3.png', 'Alles'),
            new Auto('Mercedes', 222650.00, '../../IMG/wheelys/mercedes4.png', 'Alles'),

            new Auto('Opel', 13500.00, '../../IMG/wheelys/opel1.png', 'Alles'),
            new Auto('Opel', 9500.00, '../../IMG/wheelys/opel2.png', 'Alles'),
            new Auto('Opel', 19500.00, '../../IMG/wheelys/opel3.png', 'Alles'),

            new Auto('Volkswagen', 16340.00, '../../IMG/wheelys/vw1.png', 'Alles'),
            new Auto('Volkswagen', 18340.00, '../../IMG/wheelys/vw2.png', 'Alles'),
            new Auto('Volkswagen', 216700.00, '../../IMG/wheelys/vw3.png', 'Alles'),

            new Auto('Tesla', 47980.00, '../../IMG/wheelys/tesla.png', 'Alles')
        ];
    }

    public function voegAutoToe($merk, $prijs, $url, $Alles) {
    $newAuto = new Auto($merk, $prijs, $url, $Alles);
    $this->autoos[] = $newAuto;
    }

    public function getGefilterdeLijst($minPrijs, $maxPrijs, $AutoMerk) {
        $gefilterdelijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && $auto->getMerk() == $AutoMerk /*&& $auto->getMerk() != $AutoMerk["Alles"]*/) {
                $gefilterdelijst[] = $auto;
               //print_r("if");
            } else if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && $auto->getAlles() == $AutoMerk){
                //print_r("else");
                $gefilterdelijst[] = $auto;

            }
        }
        return $gefilterdelijst;
        /*print_r($_GET['merk']);
        echo "<br>";
        print_r($AutoMerk);
        echo "<br>";*/

    }

    public function getAutoLijst() {
        return $this->autoos;
    }
}

?>