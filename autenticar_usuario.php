<?php
include_once('head.php');
?>


<body>
  <header>

    <p class="text_nivel1 cabecera">Autenticar usuario para inicio de sesión</p>
    <p class="text_nivel2">Introduce los datos del usuario</p>


  </header>

  <?php
  require_once('conect_bd.php');
  ?>

  <div class="formulario">

    <form action="iniciar_sesion.php" method="POST" name="datos">
      <label>Introduce nombre usuario: </label><input name="usuario" type="text" /> <br />
      <label>Introduce contraseña: </label><input name="contrasena" type="password" /> <br />
      <input type="submit" value="Enviar" />
      <input type="reset" value="Limpiar" />
    </form>

  </div>



  <!-- Botón de regreso a página principal -->
  <nav>
    <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>
  </nav>

</body>

</html>