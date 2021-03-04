<?php
$logInOrNo = false;
function login($logInOrNo) {

    if ($_POST['email'] === "piet@worldonline.nl" && $_POST['wachtwoord'] === "doetje123") {
        $logInOrNo = true;
    }
    else if ($_POST['email'] === "klaas@carpets.nl" && $_POST['wachtwoord'] === "snoepje777") {
        $logInOrNo = true;
    }
    else if ($_POST['email'] === "truushendriks@wegweg.nl" && $_POST['wachtwoord'] === "arkiearkie201") {
        $logInOrNo = true;
    }
    else {
        $logInOrNo = false;
    }
}
login($logInOrNo);

if ($logInOrNo = true) {
    echo "Welkom";
}
else {
    echo "Sorry, geen toegang!";
}
