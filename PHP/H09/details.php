<?php
include_once ("../MISC/functions.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/bakkerij.css">
    <title>Details van gerecht</title>
</head>
<body>
<header>
    <div class="headerContainer">
        <h2 style="color: white; font-size: 30px; padding-left: 350px; padding-top: 20px">Bakkerij Vlecht beheer</h2>
    </div>
</header>
<div class="contentContainer">
    <a href="opdrachtH9.php">Overzicht Goederen</a>
    <a href="toevoegScherm.php">Goederen Toevoegen (alleen voor admins)</a>

    <h1>Details van dit Product</h1>
    <h2>alle gegevens van dit product</h2>



    <?php
$id = $_GET["id"];

details($link, $id);

    ?>

</body>

</html>
