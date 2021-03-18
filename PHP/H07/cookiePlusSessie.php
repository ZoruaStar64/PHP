<head>
    <link rel="stylesheet" href="../../CSS/H7.css">
    <title>PHP H7</title>
</head>

<body>
<?php


?>

</body>
<?php
/*$logInOrNo = false;
$adminOrNot = false;
function login($logInOrNo, $adminOrNot) {

    if ($_POST['email'] === "ikbengebruiker@test.hall" && $_POST['wachtwoord'] === "degebruikerswachtwoord7390") {
        $logInOrNo = true;
        $adminOrNot = true;
    }
    else if ($_POST['email'] === "ikbendeadministratorhier@test.krol" && $_POST['wachtwoord'] === "mijnwachtwoordissupergeheim9471034") {
        $logInOrNo = true;
        $adminOrNot = false;
    }
    else {
        $logInOrNo = false;
        $adminOrNot = false;
    }
}
login($adminOrNot, $logInOrNo);
print_r($logInOrNo);
if ($logInOrNo = true) {
    echo "Welkom op deze site!";
}
else {
    echo "<h1>Naam en/of Wachtwoord komen niet voor in de database probeer het nog eens</h1>";

if(!isset($_POST['knop'])) { */?><!--
    <form action="<?php /*echo htmlspecialchars($_SERVER['PHP_SELF']); */?>" method="POST">
        <h1>whoops zo te zien ben jij vergeten de gegevens in te vullen probeer het nog eens!</h1>
        Email&emsp;&emsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="" required>
        <br>
        Wachtwoord <input type="password" name="wachtwoord" value="" required>
        <br>
        <input type="submit" name="knop" value="verstuur">
    </form>
    --><?php /*}}

*/
?>