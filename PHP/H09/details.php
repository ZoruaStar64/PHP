<?php
//maak een query die de id van het product vergelijkt met de id in de zoekbalk van google b.v.b: details.php?id=1
//met die query haal je alles dan op van de product in de database met die id b.v.b: SELECT * FROM bakkerij WHERE 'id' = 1
//daarna zorg je ervoor dat al die gegevens in hun eigen variabele komen b.v.b: DatabaseNaam = $naam, DatabaseIngrediënten = $ingredienten etc.
//EN DAARMEE doe je dan het hele $item->getNaam(), $item->getGewicht() spul mee
//oh en voor de url/image gedeelte is het best om een image te stylen met url("imgUrl(van Google, Yahoo, Internet Explorer/Edge)")
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/bakkerij.css">
    <title>Details van gerecht</title>
</head>
<body>
<header>
    <div class="headerContainer">
        <h2 style="color: white; font-size: 30px">Bakkerij Vlecht beheer</h2>
    </div>
</header>
<div class="contentContainer">
    <a href="opdrachtH9.php">Overzicht Goederen</a>
    <a href="toevoegScherm.php">Goederen Toevoegen (alleen voor admins)</a>

    <h1>Details van dit Gerecht</h1>
    <h2>alle gegevens van dit gerecht</h2>
    <p>Deze pagina is een WIP heb alstublieft nog effe geduld</p>


    <?php
    require_once('bakkerijGalerij.php');
    $items = new itemOverzicht();
/*    if ($items->getId() ) {

        echo   $item->getNaam() .
               $item->getGewicht() .
                $item->getVorm() . ;
    }*/
    ?>

</body>

</html>
