<?php
class Items {

private $naam;
private $ingredienten;
private $prijs;
private $url;
private $vorm;
private $gewicht;
private $id;

public function __construct($naam, $ingredienten, $prijs, $url, $vorm, $gewicht, $id) {
$this->naam = $naam;
$this->ingredienten = $ingredienten;
$this->prijs = $prijs;
$this->url = $url;
$this->vorm = $vorm;
$this->gewicht = $gewicht;
$this->id = $id;
}
    public function getNaam() {
        return $this->naam;
    }

    public function getIngredienten() {
    return $this->ingredienten;
    }

    public function getPrijs() {
    return $this->prijs;
    }

    public function getUrl() {
    return $this->url;
    }

    public function getVorm() {
    return $this->vorm;
    }

    public function getGewicht() {
        return $this->gewicht;
    }

    public function getId() {
        return $this->id;
    }

    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function setIngredienten($ingredienten) {
    $this->ingredienten = $ingredienten;
    }

    public function setPrijs($prijs) {
    $this->prijs = $prijs;
    }

    public function setUrl($url) {
    $this->url = $url;
    }

    public function  setVorm($vorm) {
    $this->vorm = $vorm;
    }

    public function  setGewicht($gewicht) {
        $this->gewicht = $gewicht;
    }

    public function  setId($id) {
        $this->id = $id;
    }

}

class itemOverzicht {

private $items;

public function __construct() {
$this->items = [
new Items ('Kadetje', 'Melk, Suiker, Bloem, Boter en Gist', 1.75,
    '../../IMG/wimVlechtBakkerij/witkadetje.png', 'Bolvormig', '50 Gram', 1),
new Items ('Croissant', 'onbekend', 1, '', 'onbekend', '50 gram', 2)
];
}

    public function voegItemToe($naam, $ingredienten, $prijs, $url, $vorm, $gewicht, $id) {
    $newItem = new Items($naam, $ingredienten, $prijs, $url, $vorm, $gewicht, $id);
    $this->items[] = $newItem;
    }


    public function getItemLijst() {
    return $this->items;
    }
}

?>