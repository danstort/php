<?php

$entrada = explode(" ", trim(fgets(STDIN)));

$operador = $entrada[0];
$num1 = $entrada[1];
$num2 = $entrada[2];
$res;

?>

<?php
switch ($operador) {
    case "+":
        $res = $num1." + ".$num2." = ".($num1+$num2);
        break;
    case '-':
        $res = $num1." - ".$num2." = ".($num1-$num2);
        break;
    case 'x':
        $res = $num1." x ".$num2." = ".($num1*$num2);
        break;
    case ':':
        $res = $num1." : ".$num2." = ".($num1/$num2);
        break;
}
?>

<p><?php echo $res; ?></p>