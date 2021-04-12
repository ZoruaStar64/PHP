<?php


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
