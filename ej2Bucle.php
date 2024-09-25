<?php
$entrada = explode(" ", trim(fgets(STDIN)));

$num1 = $entrada[0];
$num2 = $entrada[1];

$td="";
for ($i = 0; $i < $num2; $i++) {
    $td=$td."        <td></td>\n";
}

$tr;
$tr="    <tr>\n".$td."    </tr>";


$salida="";

for ($i = 0; $i < $num1; $i++) {
    $salida=$salida.$tr."\n";
}
?>
<table border="solid 1px">
<?php echo $salida;?>
</table>