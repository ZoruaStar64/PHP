<body>
<?php
//print_r($_GET);
/*echo $_GET["inlognaam"]."<br>";
echo $_GET["adres"]."<br>";
echo $_GET["email"]."<br>";
echo $_GET["knop"];*/

 if(!isset($_POST['knop'])) { ?>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1>whoopsie zo te zien ben jij vergeten de gegevens in te vullen of niet soms?</h1>
		Inlognaam&nbsp;&nbsp;&nbsp; <input type="text" name="inlognaam" value="" required>
        <br>
        Adres&emsp;&emsp;&nbsp;&nbsp;&nbsp; <input type="text" name="adres" value="" required>
        <br>
        Email&emsp;&emsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="" required>
        <br>
        Wachtwoord <input type="password" name="wachtwoord" value="" required>
        <br>
		<input type="submit" name="knop" value="verstuur">
	</form>
<?php
		} else {
			print_r($_POST);
		}
?>
</body>



