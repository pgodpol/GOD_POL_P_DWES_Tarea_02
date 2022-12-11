<?php
include_once('head.php');
?>

<body>


    <?php

    function comprobar_rol()
    {
        session_start();


        if (isset($_SESSION['user_sesion']) && isset($_SESSION['rol_sesion'])) {

            if ($_SESSION['rol_sesion'] === 'profesor') {
                $salida = 'profesor';
            } else {
                $salida = 'alumno';
            }
        } else {
            $salida = 'desconectado';
        }

        return $salida;
    }
    ?>
</body>

</html>