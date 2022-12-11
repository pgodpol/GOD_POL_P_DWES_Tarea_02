<?php
include_once('head.php');
?>

<body>

    <header>
        <p class="text_nivel1 cabecera">Informe del alumno</p>
        <p class="text_nivel2">Notas de test de examen realizados</p>
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
            <form action="generar_informe.php" method="POST" name="datos">
                Introduce nombre usuario: <input name="usuario" type="text" /> <br />
                <input type="submit" value="Enviar" />
                <input type="reset" value="Limpiar" />
            </form>
        </div>


    <?php




        include_once("conect_bd.php");


        if (!empty($_POST['usuario'])) {

            $entrada = $_POST['usuario'];

// ////////////// INFORME DE RESULTADO DE NOTAS POR ALUMNO ///////////////////

            echo ('<p class="text_nivel2">Datos pertenecientes al usuario:  ' . $entrada . '</p>');


            $sql2 = "SELECT e.intento, sum(r.respuesta_correcta) AS sumaAciertos
FROM usuario a
INNER JOIN examen e ON a.id_usuario = e.id_usuario
INNER JOIN respuesta r ON (e.respuesta = r.respuesta) AND (e.id_pregunta = r.id_pregunta)
INNER JOIN pregunta p ON e.id_pregunta = p.id_pregunta
WHERE a.nombre_usuario='" . $entrada . "' 
GROUP BY e.intento;
            ";

            $cons2 = $conexion->prepare($sql2);
            $cons2->execute();
            $result2 = $cons2->fetchAll(PDO::FETCH_OBJ);

            if ($cons2->rowCount() > 0) {



                echo "<table class='tabla_respuestas'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th class='c6'>Intento de examen</th>";
                echo "<th class='c6'>Puntuación total</th> ";
                echo "</tr>";
                echo "</thead> ";
                echo "<tbody> ";

                foreach ($result2 as $variable) {

                    echo "<tr>";
                    echo "<td class='c6'>" . $variable->intento . "</td>";
                    echo "<td class='c6'>" . $variable->sumaAciertos . "</td>";
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