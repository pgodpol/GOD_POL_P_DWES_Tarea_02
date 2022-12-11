<?php
include_once('head.php');
?>

<body>

    <p class="text_nivel1 cabecera">Introduciendo nuevo usuario en la base de datos</p>
    <p class="text_nivel3">Alta de un nuevo usuario</p>
    <?php

    include_once("conect_bd.php");

    if (!empty($_POST['usuario']) && isset($_POST['contrasena']) && !empty($_POST['rol'])) {
        $a = $_POST['usuario'];
        $b = $_POST['contrasena'];
        $c = $_POST['rol'];

        try {

            $consulta = $conexion->prepare('INSERT INTO usuario(nombre_usuario,contrasena_usuario,rol_usuario) VALUES (?,?,?)');
            $consulta->execute(array($a, $b, $c));
            echo ("<p class='text_nivel3'>El nuevo usuario ha sido dado del alta con éxito.");
            echo ("<br>");

        } catch (Exception $e) {

            echo ("<p class='text_nivel3'>El nuevo usuario el usuario no se ha podido introducir.");
            echo ("<p class='text_nivel4'>Prueba con un nombre de usuario diferente ya que podría estar usado.");

            /*AÑADO más información para usarla en fase de pruebas */
            echo "<p class='text_nivel4'>Voy a darte más información sobre el error.</p>";
            echo $e->getMessage();
            echo $e->getTraceAsString();
        }
    } else {
        echo "<p class='text_nivel3'>El formulario tiene campos no válidos, vuelve a intentarlo</p>";
    }

    ?>


    <!-- Botón de regreso a página principal -->
    <nav class="boton1"><a href="alta_nuevo_usuario.php">Volver atrás</a> </nav>


</body>

</html>