<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Opdracht 1 H6</title>
    <style>

    </style>
</head>
<body>
<h1>Opdracht 2 H6</h1>
<p>Bij deze opdracht moet ik een formulier maken<br>
    met invulvelden voor e-mail en wachtwoord zoals Opdracht 3+4 van H5<br>
het enige wat aan de opdracht verandert is is dat ik nu de gegevens uit een database moet halen.</p>

<!--<form action="databaseInlog.php" method="post">-->
<form action="opdracht2H6.php" method="post">
    Email&emsp;&emsp;&ensp;&nbsp; <input type="text" name="email" value="" required>
    <br>
    Wachtwoord <input type="password" name="wachtwoord" value="" required>
    <br>
    <input type="submit" name="knop" value="verstuur">
</form>

    <?php
    require_once('../../PHP/MISC/creds.php');

    try {
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
        // set the PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    //echo $email . "<br>" . $wachtwoord;

    $query = "select `e-mail`, wachtwoord from u3651p69583_sander.docent where `e-mail` = '$email'";
    $statement = $dbh->prepare($query) or die("Error 1.");
    $statement->execute() or die("Error 2.");
    //echo "<br>" . $query . "<br>";

    while ($arraytable = $statement->fetch()) {
        /*echo "<tr>";
        echo "<td>" . $arraytable[0] . "</td>";
        echo "<td>" . $arraytable[1] . "</td>";*/
        $trueEmail = $arraytable[0];
        $trueWachtwoord = $arraytable[1];
        //echo "</tr>";
    }


    echo "<br>";
    if ($email == $trueEmail && $wachtwoord == $trueWachtwoord){
        echo "Welkom";
    }
    else {
        echo "Sorry, geen toegang!";
    }

    /*if ($email == $statement)*/

    /*$query = "select * from docent";
    $statement = $dbh->prepare($query) or die("Error 1.");
    $statement->execute() or die("Error 2.");*/


    /*$query = "select * from docent where wachtwoord is not NULL";
    $statement = $dbh->prepare($query) or die("Error 1.");
    $statement->execute() or die("Error 2.");


    while ($arraytable = $statement->fetch()) {
        echo "<tr>";
        echo "<td>" . $arraytable[8] . "</td>";
        echo "<td>" . $arraytable[9] . "</td>";
        echo "</tr>";
    }*/

    ?>

<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H06/h06.php'>Terug naar Hoofdstuk 6</a></p>

</body>
</html>
