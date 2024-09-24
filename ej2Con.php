<?php

$entrada = explode(" ", trim(fgets(STDIN)));

$pun1 = $entrada[0];
$pun2 = $entrada[1];


?>
<?php if ($pun1==$pun2): ?>
Ha habido empate a <?php echo $pun1?>
<?php elseif ($pun1>=$pun2): ?>
El jugador ganador es el 1 con <?php echo $pun1?>
<?php elseif ($pun1<=$pun2): ?>
El jugador ganador es el 2 con <?php echo $pun2?>
<?php endif; ?>