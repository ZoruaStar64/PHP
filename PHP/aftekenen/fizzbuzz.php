<?php
//tel van 1 tot 1000
//als getal deelbaar door 3 is dan verander getal met fizz
//als getal deelbaar door 5 is dan verander getal met buzz
//als getal deelbaar door 3 EN 5 is dan verander getal met fizzbuzz

for ($getalTeller = 1; $getalTeller <= 1000; $getalTeller++ ) {
    $trueGetal = $getalTeller;
    if ($trueGetal % 3 == 0 && $trueGetal % 5 == 0) {
        echo "fizzbuzz";
    }
    else if ($trueGetal % 3 == 0) {
        echo "fizz";
    }
    else if ($trueGetal % 5 == 0) {
        echo "buzz";
    }

    else {
       echo $trueGetal;
    }
    echo "<br>";
}
