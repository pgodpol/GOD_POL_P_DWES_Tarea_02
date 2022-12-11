<?php
include_once('head.php');
?>

<body>
  <p class="text_nivel1 cabecera">Página de registro o alta como usuario nuevo.</p>
  <p class="text_nivel2">Alta de un nuevo usuario</p>


  <?php
  require_once('conect_bd.php');
  include_once('comprobar_sesion.php');
  ?>



  <?php

  if (comprobar_rol() !== "profesor") {
    echo ("<br>");
    echo ("<p class='text_nivel3'>Para realizar la acción solicitada es necesario el rol de profesor<p>");
    echo ("<p class='text_nivel3'>Con el rol actual no puede dar de alta ningún usuario<p>");
  } else {


    echo ('<nav class="formulario">');
    
  echo ('
    <form action="crea_usuario.php" method="POST">
      <label>Introduce nombre usuario: </label><input name="usuario" required="required" type="text" /> <br />
      <label>Introduce contraseña: </label><input name="contrasena" type="password" /> <br />
      <label>Introduce rol del usuario:
          <input type="radio" name="rol" value="alumno"><span>Alumno | </span>
          <input type="radio" name="rol" value="profesor"><span>Profesor</span><br>
      </label>

      <input name="enviar" type="submit" value="Enviar" />
      <input name="limpiar" type="reset" value="Limpiar" />
    </form>

');

echo ("</nav>");
  }
  ?>





  <!-- Botón de regreso a página principal -->
  <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>