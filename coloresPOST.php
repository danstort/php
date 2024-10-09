<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
            <span class="avatar"><img src="https://i2.wp.com/ilustraciology.com/wp-content/uploads/2017/06/colores-primarios-colores-secundarios-y-significado-de-los-colores-ryb-1-1.png?resize=256%2C256&ssl=1" alt="" /></span>
            <h2>Elecci&oacute;n de colores</h2>
            <form name="calculator" action="coloresPOST.php" method="post">
                <!-- Escribe el resultado como valor de la propiedad value -->
                <input type="textfield" name="ans" value=""  style="background-color:<?php echo "rgb(". $_POST['rojo'].", ". $_POST['verde'].", ". $_POST['azul'].")"?>">
                <br>
                <br>
                <label for="rojo">Rojo:</label>
                <input type="range" name="rojo" value="red" min="0" max="255">
                <label for="verde">Verde:</label>
                <input type="range" name="verde" value="green" min="0" max="255">
                <label for="azul">Azul:</label>
                <input type="range" name="azul" value="blue" min="0" max="255">
                <br>
                <input type="submit" value="Mostrar color">
                <input type="reset" value="Cancelar">
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
            <li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
<!-- Documento HTML-->
