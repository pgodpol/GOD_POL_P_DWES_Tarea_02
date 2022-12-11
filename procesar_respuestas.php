<?php
include_once('head.php');
?>

<body>

    <?php

    include_once('comprobar_sesion.php');


    require_once('conect_bd.php');
    session_start();
    $_SESSION['intento_test']++;

    $consulta = $conexion->prepare('INSERT INTO examen (intento, id_usuario,id_pregunta,respuesta) VALUES (?,?,?,?)');



    try {


        $a = (int) $_POST['num_intento'];
        $b = (int) $_POST['userid'];
        $c = (int) $_POST['preg0'];
        $d = (int) $_POST['respuesta0'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg1'];
        $d = (int)$_POST['respuesta1'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg2'];
        $d = (int)$_POST['respuesta2'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg3'];
        $d = (int)$_POST['respuesta3'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg4'];
        $d = (int)$_POST['respuesta4'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg5'];
        $d = (int)$_POST['respuesta5'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg6'];
        $d = (int)$_POST['respuesta6'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg7'];
        $d = (int)$_POST['respuesta7'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg8'];
        $d = (int)$_POST['respuesta8'];
        $consulta->execute(array($a, $b, $c, $d));

        $a = (int)$_POST['num_intento'];
        $b = (int)$_POST['userid'];
        $c = (int)$_POST['preg9'];
        $d = (int)$_POST['respuesta9'];
        $consulta->execute(array($a, $b, $c, $d));

        echo ("Las respuestas del examen se han enviado con éxito.");
    } catch (Exception $e) {
        echo ("Ha ocurrido un error en el proceso.");
    }


    ?>
    <br/>

    <!-- Botón de regreso a página principal -->
    <nav class="boton2"><a href="index.html">Ir a inicio</a> </nav>

    <!-- Botón regreso a nuevo examen -->
    <nav class="boton2"><a href="test_online.php">Realizar otro intento</a> </nav>

</body>

</html>