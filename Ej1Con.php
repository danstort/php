<?php

$entrada = explode(" ", trim(fgets(STDIN)));

$num1 = $entrada[0];
$num2 = $entrada[1];


?>

<?php if ($num1==$num2): ?>
Pareja de <?php echo $num1?>

<?php elseif ($num1>=$num2): ?>
El mayor valor es <?php echo $num1?>

<?php elseif ($num1<=$num2): ?>
El mayor valor es <?php echo $num2?>

<?php endif; ?>