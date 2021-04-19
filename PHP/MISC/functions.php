<?php

require_once('../MISC/creds.php');



function inLogFormulier($link) {

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "select * from u3651p69583_inlog.inlog where `e-mail` = '$email'";
    $statement = mysqli_prepare($link, $query);
    $statement->bind_param("ss", $trueEmail, $trueWachtwoord);

    while ($arraytable = $statement->fetch()) {

        $trueEmail = $arraytable[0];
        $trueWachtwoord = $arraytable[1];

    }

/*    if (isset($_GET["logout"])) {
        $_SESSION = array();
        session_destroy();
    }*/

    if (isset($_POST['knop'])
        && $email == $trueEmail && $wachtwoord == $trueWachtwoord) {
        $_SESSION["user"] = array("naam" => $trueEmail,
            "wachtwoord" => $trueWachtwoord);
    }
}


//Begin H9 functions
function voegToe ($link, $naam, $ingredienten, $vorm, $gram, $prijs, $webLink) {

$query = "INSERT INTO u3651p69583_inlog.bakkerij(naam, ingredienten, vorm, gram, prijs, webLink) VALUE (?, ?, ?, ?, ?, ?)";
$stmt1 = mysqli_prepare($link, $query);
$stmt1->bind_param("sssiis", $naam, $ingredienten, $vorm, $gram, $prijs, $webLink);
if (!$stmt1) {
    die("mysqli error: " . mysqli_error($link));
}
else {
    mysqli_stmt_execute($stmt1);

    echo mysqli_stmt_error($stmt1);
    mysqli_stmt_close($stmt1);
}
$assets = [$naam, $ingredienten, $vorm, $gram, $prijs, $webLink];
echo "De volgende gegevens zijn toegevoegd aan de database met een nieuwe ID";
foreach ($assets as $asset) {
    echo "<br>";
    echo $asset;
    echo "<br>";
}
}

function editName ($link, $naam, $id) {

    $queryName = "UPDATE u3651p69583_inlog.bakkerij SET naam='$naam' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryName);
    $stmt1->bind_param("s", $naam);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "De volgende naam is aangepast in de database";
        echo "<br>";
        echo $naam;

}

function editIngredienten ($link, $ingredienten, $id) {

    $queryIngredienten = "UPDATE u3651p69583_inlog.bakkerij SET ingredienten='$ingredienten' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryIngredienten);
    $stmt1->bind_param("s", $ingredienten);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "De volgende Ingredient(en) is/zijn aangepast in de database";
    echo "<br>";
    echo $ingredienten;

}

function editVorm ($link, $vorm, $id) {

    $queryVorm = "UPDATE u3651p69583_inlog.bakkerij SET vorm='$vorm' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryVorm);
    $stmt1->bind_param("s", $vorm);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "De volgende vorm is aangepast in de database";
    echo "<br>";
    echo $vorm;

}

function editGewicht ($link, $gram, $id) {

    $queryGewicht = "UPDATE u3651p69583_inlog.bakkerij SET gram='$gram' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryGewicht);
    $stmt1->bind_param("i", $gram);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "Het volgende Gewicht is aangepast in de database";
    echo "<br>";
    echo $gram;

}

function editPrijs ($link, $prijs, $id) {

    $queryPrijs = "UPDATE u3651p69583_inlog.bakkerij SET prijs='$prijs' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryPrijs);
    $stmt1->bind_param("i", $prijs);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "De volgende Prijs is aangepast in de database";
    echo "<br>";
    echo $prijs;

}

function editImage ($link, $webLink, $id) {

    $queryImage = "UPDATE u3651p69583_inlog.bakkerij SET webLink='$webLink' WHERE id='$id'";
    $stmt1 = mysqli_prepare($link, $queryImage);
    $stmt1->bind_param("s", $webLink);
    if (!$stmt1) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($stmt1);

        //echo mysqli_stmt_error($stmt1);
        mysqli_stmt_close($stmt1);
    }

    echo "De volgende Image is aangepast in de database";
    echo "<br>";
    echo $queryImage;

}

function createVariables($link, $naam, $ingredienten, $vorm, $gram, $prijs, $webLink) {
/*    $queryGet = "SELECT id, naam, ingredienten, vorm, gram, prijs, webLink FROM u3651p69583_inlog.bakkerij";
    $result = $link->query($queryGet);*/
/*    $getStatement = mysqli_prepare($link, $queryGet);
    $getStatement->bind_param("sssiis", $naam, $ingredienten, $vorm, $gram, $prijs, $webLink);*/

/*    if (!$getStatement) {
        die("mysqli error: " . mysqli_error($link));
    }
    else {
        mysqli_stmt_execute($getStatement);
        echo mysqli_stmt_error($getStatement);
        mysqli_stmt_close($getStatement);
    }*/

/*    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo  "<br>" . "naam: " . $row["naam"] . " - Vorm: " . $row["vorm"];
        }
    }*/

/*    while ($arraytable = $getStatement->fetch()) {

        $trueNaam = $arraytable[0];
        $trueingredienten = $arraytable[1];
        $trueVorm = $arraytable[2];
        $trueGram = $arraytable[3];
        $truePrijs = $arraytable[4];
        $trueLink = $arraytable[5];

    }*/

}
//fetch_array(MYSQLI_ASSOC)

function newCreateVariables($link) {
    $queryGet = "SELECT id, naam, ingredienten, vorm, gram, prijs, webLink FROM u3651p69583_inlog.bakkerij";
    $result = $link->query($queryGet);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
            <td>' . $row["naam"] . '</td>
            <td>' . $row["gram"] . " Gram" . '</td>
            <td>' . $row["vorm"] . '</td>
            <td><a class="Details" href="details.php?id=' . $row["id"] . '">Details</a> </td>
          </tr>';
        }
    }
}

function details($link, $id) {

/*   $id = $_GET["id"];*/

    $queryGet = "SELECT id, naam, ingredienten, vorm, gram, prijs, webLink FROM u3651p69583_inlog.bakkerij WHERE id='$id'";
    $result1 = $link->query($queryGet);
    $row = $result1->fetch_assoc();

            echo '<tr>

            <td>NAAM: ' . $row["naam"] . '</td>
            <br>
            <td>INGREDIENTEN: ' . $row["ingredienten"] . '</td>
            <br>
            <td>VORM: ' . $row["vorm"] . '</td>
            <br>
            <td>GEWICHT: ' . $row["gram"] . " Gram" . '</td>
            <br>
            <td>PRIJS: &euro; ' . $row["prijs"] . '</td>
            <br>
            <td><img style="width: 300px" src="' .$row["webLink"] . '">' . '</td>
       
          </tr>';

        }


//Einde H9 functions