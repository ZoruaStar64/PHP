<?php
$gemiddeldeArray = [4, 15, 9, 3, 11, 7];
$newnumber = 0;
foreach ($gemiddeldeArray as $number) {
     $newnumber += $number;
}

$gemiddeldeGetal = $newnumber / 6;

echo $gemiddeldeGetal;
