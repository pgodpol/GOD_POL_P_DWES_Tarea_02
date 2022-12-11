<?php
include_once('head.php');
?>

<body>
    <h1></h1>

    <p class="text_nivel1 cabecera">Autenticando a un usuario en la base de datos</p>


    <?php

    require_once('conect_bd.php');
    session_start();

    /* Preparando una consulta a la base de datos para comprobar datos usuario y extraerlos si son correctos */
    $cadena = "SELECT * FROM usuario WHERE nombre_usuario ='" . $_POST['usuario'] . "' AND contrasena_usuario='" . $_POST['contrasena'] . "'";

    /* La consulta la extraemos y pasamos a un array */
    $consulta_user = $conexion->prepare($cadena);
    $consulta_user->execute();
    $resultado_user = $consulta_user->fetchAll();

    /* Si no hay datos en el array es porque el usuario no existe */
    /* en caso contrario inicializa las variables globles */
    if (empty($resultado_user)) {
        echo ("El usuario que ha introducio no existe");
    } else {

        $_SESSION = array();
        $_SESSION['userid_sesion'] = $resultado_user[0][0];
        $_SESSION['user_sesion'] = $resultado_user[0][1];
        $_SESSION['rol_sesion'] = $resultado_user[0][3];
        $_SESSION['intento_test'] = 1;



                

        $texto = "<p class='text_nivel3 cabecera'>El usuario: <strong>" . $_SESSION['user_sesion'] 
        . "</strong>, con el rol de: <strong>" 
        . $_SESSION['rol_sesion'] 
        . "</strong>, ha sido correctamente autenticado en el sistema </p>";

        echo ($texto);
    };

    echo ("<br>");
    ?>

    <!-- Botón de regreso a página principal -->
    <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>