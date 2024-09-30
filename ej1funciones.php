<?php
function suma($entrada)
{

    $resultado = 0;
    for ($i = 1; $i < count($entrada); $i++) {
        $resultado = $resultado + $entrada[$i];
    }
    return $resultado;
}

function media($entrada)
{

    $resultado = 0;
    for ($i = 1; $i < count($entrada); $i++) {
        $resultado = $resultado + $entrada[$i];
    }
    $resultado = $resultado / (count($entrada) - 1);

    return $resultado;
}
while ($fila = fgets(STDIN)) : ?>
<p><?php
        $entrada = explode(" ", trim($fila));

        $operacion = $entrada[0];





        $final = "";

        if (count($entrada) > 2) {

            switch ($operacion) {
                case "suma":
                    $final = "La suma de los números es: " . suma($entrada);
                    break;
                case 'media':
                    $final = "La media de los números es: " . media($entrada);
                    break;
                default:
                    $final = "(Error) Operación no permitida";
            }
        } else {
            $final = "(Error) No dispongo de suficientes argumentos.";
        }


echo $final; ?></p>
<?php endwhile; ?>