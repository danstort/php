<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
// Cada función recibe dos operandos, realiza la operación y devuelve un String que sería "Operando1 Operador Operando2 = Resultado"
function suma($operando1, $operando2) {
    $resultado = $operando1 + $operando2;
    return "$operando1 + $operando2 = $resultado";
}

function resta($operando1, $operando2) {
    $resultado = $operando1 - $operando2;
    return "$operando1 - $operando2 = $resultado";
}

function multiplicacion($operando1, $operando2) {
    $resultado = $operando1 * $operando2;
    return "$operando1 * $operando2 = $resultado";
}

function division($operando1, $operando2) {
    $resultado = $operando1 / $operando2;
    return "$operando1 / $operando2 = $resultado";
}
// Comprobación de que detecta los 3 gets, si no los detecta, no hace nada.
if(isset($_GET['operador']) && isset($_GET['operando1']) && isset($_GET['operando2'])) {
    $operador = $_GET['operador'];
    $operando1 = $_GET['operando1'];
    $operando2 = $_GET['operando2'];
    // Este switch comprueba el Operador y lo relaciona con alguno de los casos. Si no cumple con la condición de ninguno de los casos, no establece la variable $operación.
    switch($operador) {
        case "mas": $operacion = suma($operando1, $operando2); break;
        case "menos": $operacion = resta($operando1, $operando2); break;
        case "por": $operacion = multiplicacion($operando1, $operando2); break;
        case "entre": $operacion = division($operando1, $operando2); break;
    }
}
?>
<html>
    <head>
        <title>Identity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="Referrer" content="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <section id="main">
                        <header>
                            <span class="avatar"><img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2013/02/matematicas-150x150.png" alt="" /></span>
                            <h2>Calculadora B&aacute;sica</h2>
                            <form name="calculator">
                            <!-- Escribe el resultado como valor de la propiedad value -->
                            <!-- Comprueba si está la variable $operacion establecida. En caso de que no esté, muestra nada. -->
                                <input type="textfield" name="ans" value="<?php if(isset($operacion)) {echo $operacion;} ?>">
                                <br>
                                <input type="button" value="1">
                                <input type="button" value="2">
                                <input type="button" value="3">
                                <input type="button" value="+">
                                <br>
                                <input type="button" value="4">
                                <input type="button" value="5">
                                <input type="button" value="6">
                                <input type="button" value="-">
                                <br>
                                <input type="button" value="7">
                                <input type="button" value="8">
                                <input type="button" value="9">
                                <input type="button" value="*">
                                <br>
                                <input type="button" value="0">
                                <input type="reset" value="c">
                                <input type="button" value="/">
                                <input type="button" value="=">
                            </form>
                            
                        </header>

                        <footer>
                            <ul class="icons">
                            </ul>
                        </footer>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="copyright">
                            <li>Copyright Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
            <script>
                if ('addEventListener' in window) {
                    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
                    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
                }
            </script>

    </body>
</html>