<?php

/*["Alfa Romeo", "Audi", "Ferrari", "Fiat", "Mercedes", "Opel", "Volkswagen"]*/
class Auto {

    private $merk;
    private $prijs;
    private $url;
    private $type;




    public function __construct($merk, $prijs, $url) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->url = $url;
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

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

}

class Autooverzicht {

    private $autoos;

    public function __construct() {
        $this->autoos = [
            new Auto('AlfaRomeo', 119980.00, '../../IMG/wheelys/ar1.png'), //Quadrifoglio
            new Auto('AlfaRomeo', 45250.00, '../../IMG/wheelys/ar2.png'), //Giulia
            new Auto('Audi', 102500.00, '../../IMG/wheelys/audi1.png'),
            new Auto('Ferrari', 99500.00, '../../IMG/wheelys/ferrari1.png'),
            new Auto('Fiat', 10500.00, '../../IMG/wheelys/fiat1.png'),
        ];
    }

    public function voegAutoToe($merk, $prijs, $url) {
    $newAuto = new Auto($merk, $prijs, $url);
    $this->autoos[] = $newAuto;
    }

    public function getGefilterdeLijst($minPrijs, $maxPrijs) {
        $gefilterdelijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs /*&&  $this->autoos == $_POST['merk']*/) {
            $gefilterdelijst[] = $auto;
            }
        }

        //print_r($auto->getMerk());
        return $gefilterdelijst;
    }

    public function getAutoLijst() {
        return $this->autoos;
    }
}

?>