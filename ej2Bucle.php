<?php
$entrada = explode(" ", trim(fgets(STDIN)));

$num1 = $entrada[0];
$num2 = $entrada[1];

$td;
for ($i = 0; $i < $num2; $i++) {
    $td=$td."<td></td>";
}
echo $td;