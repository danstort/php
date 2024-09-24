<?php
$entrada = explode(" ", trim(fgets(STDIN)));
$i = 0;
$cont = 0;
$res = 0;

while ($i == 0) {

    if ($entrada[$cont]==0){
        $i++;
    }
    $res= $res+$entrada[$cont];
    $cont++;
}
?>
Se han sumado <?php echo ($cont-1) ?> números, dando como resultado un total de <?php echo $res ?>