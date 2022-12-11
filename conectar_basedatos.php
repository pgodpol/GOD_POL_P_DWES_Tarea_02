<?php
include_once('head.php');
?>

<body>
    <p class="text_nivel1 cabecera">Conectando con la base de datos</p>
    <p class="text_nivel3">Ha solicitado una conexión con base de datos</p>

    <?php
    require_once('conect_bd.php');

    $cadena = '<p class="text_nivel4">La conexión con la base de datos "' . $dbname . '" se ha realizado correctamente.</p>';
    echo ($cadena);
    ?>

    <!-- Botón de regreso a página principal -->
    <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>