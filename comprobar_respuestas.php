<?php
include_once('head.php');
?>


<body>

    <header>
        <p class="text_nivel1 cabecera">Comprobación de respuestas de examen</p>
        <p class="text_nivel2">Introduce los datos del usuario</p>
    </header>

    <?php
    include_once('comprobar_sesion.php');
    ?>

    <?php
    if (comprobar_rol() !== "profesor") {
        echo ("<p class='text_nivel3'>Para realizar la acción solicitada es necesario el rol de profesor");
        echo ("<br>");
        echo ("Con el rol actual no puede realizar esta acción.</p>");
    } else {

    ?>

        <div class="formulario">
            <form action="comprobar_respuestas.php" method="POST" name="datos">
                Introduce nombre usuario: <input name="usuario" type="text" /> <br />
                <input type="submit" value="Enviar" />
                <input type="reset" value="Limpiar" />
            </form>
        </div>

    <?php
        include_once("conect_bd.php");


        if (!empty($_POST['usuario'])) {


            $entrada = $_POST['usuario'];

            echo ('<p class="text_nivel2">Datos pertenecientes al usuario:  ' . $entrada .'</p>');


            $sql1 = "SELECT * FROM usuario a
            INNER JOIN examen e ON a.id_usuario = e.id_usuario
            INNER JOIN respuesta r ON (e.respuesta = r.respuesta) AND (e.id_pregunta = r.id_pregunta)
            INNER JOIN pregunta p ON e.id_pregunta = p.id_pregunta
            WHERE nombre_usuario = '$entrada'
            ORDER BY e.intento;
            ";

            $cons1 = $conexion->prepare($sql1);
            $cons1->execute();
            $result1 = $cons1->fetchAll(PDO::FETCH_OBJ);

            //     print_r($result1);


            if ($cons1->rowCount() > 0) {

                echo '<table class="tabla_respuestas">';
                echo "<thead>";
                echo "<tr>";
                echo "<th class='c1'>Alumno</th>";
                echo "<th class='c2'>Intento</th>";
                echo "<th class='c3'>Pregunta</th> ";
                echo "<th class='c4'>Respuesta</th> ";
                echo "<th class='c5'>Acierto</th></tr> ";
                echo "</tr>";
                echo "</thead> ";
                echo "<tbody> ";

                foreach ($result1 as $variable) {

                    echo "<tr>";
                    echo "<td class='c1'>" . $variable->nombre_usuario . "</td>";
                    echo "<td class='c2'>" . $variable->intento . "</td>";
                    echo "<td class='c3'>" . $variable->texto_pregunta . "</td>";
                    echo "<td class='c4'>" . $variable->texto_respuesta . "</td>";
                    echo "<td class='c5'>" . $variable->respuesta_correcta . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            }
        } else {
            echo "<p class='text_nivel4'>Debes rellenar el campo del formulario antes de pulsar enviar.</p>";
        }
    }

    ?>

    <!-- Botón de regreso a página principal -->
    <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>