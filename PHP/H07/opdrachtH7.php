
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>PHP H7</title>
</head>
<body>

<h1>Hoofdstuk 7's opdracht</h1>

<p>Welkom bij hoofdstuk 7's opdracht</p>

<p>In deze opdracht moet ik een formulier maken met daarin invulvelden voor
    <br>een e-mail adres, een wachtwoord en een submit knop<br>
    er is een e-mail en wachtwoord voor een gebruiker en een voor een admin<br>
zodra je ingelogd bent wordt jouw naam en rol weergeven op het scherm<br>
    en een link naar een "admin" pagina verschijnt<br>
zonder admin rol dan zegt het dat je geen toegang hebt als je wel de rol hebt dan verwelkomt het jouw</p>

<p>De normale gebruiker's e-mail + wachtwoord zijn: ikbengebruiker@test.hall || degebruikerswachtwoord7390<br>
en die van de admin is dan: ikbendeadministratorhier@test.krol || mijnwachtwoordissupergeheim9471034</p>

<form action="cookiePlusSessie.php" method="post">
    Email&emsp;&emsp;&ensp;&nbsp; <input type="text" name="email" value="" required>
    <br>
    Wachtwoord <input type="password" name="wachtwoord" value="" required>
    <br>
    <input type="submit" name="knop" value="verstuur">
</form>


<p><a class='home' href='../../index.php'>Terug naar home</a><br><a href='../../PHP/H07/h07.php'>Terug naar Hoofdstuk 7</a></p>

</body>
</html>