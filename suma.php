<?php

$datos = explode(" ", trim(fgets(STDIN)));
?>
Se han introducido <?php echo count($datos) ?> números

<?php if (count($datos)>=2): ?>
<?php echo $datos[0]+$datos[1]?>
<?php elseif (count($datos)<2): ?>
Argumentos insuficientes
<?php endif; ?>
