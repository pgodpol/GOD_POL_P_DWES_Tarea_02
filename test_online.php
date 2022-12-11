<?php
include_once('head.php');
?>

<body>
  <h1></h1>

  <p class="text_nivel1 cabecera">Realización de test de examen online</p>

  <?php
  require_once('conect_bd.php');
  include_once('comprobar_sesion.php');
  ?>



  <?php

  // solamente se va a realizar examen si el rol de usuario es de alumno
  // La segunda comprobación es el número de intentos de examen que no puede superar 3 intentos

  if (comprobar_rol() !== "alumno") {

    echo ("<p class='text_nivel3'>Para realizar la acción solicitada es necesario el rol de alumno");
    echo ("<br>");
    echo ("Con el rol actual no puede realizar esta acción.</p>");

  } elseif ($_SESSION['intento_test'] > 3) {
    echo ("Ha realizado más de 3 intentos de examen");
    echo ("<br>");
    echo ("Se han agotado los intentos.");
  } else {



    ////// preparando la cabecera ////

    $cadena1 = "<p class='text_nivel3'>Generando un nuevo examen de 10 preguntas <br/>para el usuario: "
      . $_SESSION['user_sesion']
      . ", con el rol de: "
      . $_SESSION['rol_sesion']
      . ".</p>";

    echo ($cadena1);
    $cadena2 = "<p class='text_nivel4'><strong>Intento nº: " . $_SESSION['intento_test'] . "</strong>.</p>";
    echo ($cadena2);

  ?>



  <?php

    ////////// preparando la consulta con las preguntas recogidas de la base de datos ///////
    $consulta_preguntas = $conexion->prepare('SELECT * FROM pregunta');
    $consulta_preguntas->execute();
    $resultado_preguntas = $consulta_preguntas->fetchAll();


    // para tener números aleatorios únicos cargo un array y lo desordeno
    $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    shuffle($array);

    //genero un número aleatorio para cambiar el orden de las preguntas
    for ($i = 0; $i <= 9; $i++) {

      // Obtengo el número que hay en cada posición de un array desordenado
      $numero_aleatorio = $array[$i];

      echo ('<div class="examen"');      ////////////////   cuerpo del examen ///////////////

      echo ('<p class="cuestion">Cuestión nº ');
      echo ($i + 1);
      echo ("</p>");

      print_r($resultado_preguntas[$numero_aleatorio][1]);
      echo ("<br/>");
      $num = $numero_aleatorio + 1;
      /* Preparo una cadena que concatena el texto del SELECT con la variable del numero aleatorio */
      $consul = "SELECT texto_respuesta FROM respuesta WHERE id_pregunta= '$num' ";


      $consulta_respuestas = $conexion->prepare($consul);
      $consulta_respuestas->execute();
      $resultado_respuestas = $consulta_respuestas->fetchAll();


      echo ("<ul><li>");
      print_r($resultado_respuestas[0][0]);
      echo ("</li><li>");
      print_r($resultado_respuestas[1][0]);
      echo ("</li><li>");
      print_r($resultado_respuestas[2][0]);
      echo ("</li>");
      echo ("</ul>");


      $parte1 = '<form action="procesar_respuestas.php" method="POST" name="datos">';
      $parte2 = 'Respuesta:';
      $parte3 = '<span>   A </span><input type="radio" name="respuesta' . $i . '" value="1" required>';
      $parte4 = '<span>  | B </span><input type="radio" name="respuesta' . $i . '" value="2" >';
      $parte5 = '<span>  | C </span><input type="radio" name="respuesta' . $i . '" value="3">';

      $parte6 = '<input type="hidden" name="userid" value="' . $_SESSION['userid_sesion'] . '"';
      $parte7 = '<input type="hidden" name="num_intento" value="' . $_SESSION['intento_test'] . '"';
      $parte8 = '<input type="hidden" name="preg' . $i . '" value="' . $num . '"';

      $parte10 = '<input name="enviar" type="submit" value="Enviar"/>
  <input type="reset" value="Limpiar" />';

      echo ($parte1);
      echo ($parte2);
      echo ($parte3);
      echo ($parte4);
      echo ($parte5);
      echo ("<br/>");
      echo ($parte6);
      echo ("<br/>");
      echo ($parte7);
      echo ("<br/>");
      echo ($parte8);
      echo ("<br/>");

      echo ("<br/>");
      echo ("<br/>");
    };
    echo ($parte10);

    echo ('</div>');

  }
  ?>

  <!-- Botón de regreso a página principal -->
  <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>