<?php
print_r($_POST);
echo "<br>";
foreach ($_POST as $dierNaam) {
    echo "<img src='../../IMG/". $dierNaam . ".png'>";
}
?>