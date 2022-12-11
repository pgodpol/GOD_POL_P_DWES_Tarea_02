<?php
include_once('head.php');
?>

<body>
  <p class="text_nivel1 cabecera">Cerrar la sesión de usuario autenticado</p>
  <p class="text_nivel3">Ha solicitado cerrar la sesión actual de usuario</p>

  <?php


  session_start();

  if (isset($_SESSION['user_sesion'])) {
    echo "<br>";
    $text1 = '<p class="text_nivel4">Se ha cerrado la sesión del usuario: "' .$_SESSION["user_sesion"] .'"</p>';
    echo ($text1);
    $_SESSION = array();
    session_destroy();
    echo '<p class="text_nivel4">La acción se ha realizado correctamente </p>';

  } else {
    echo ('
    <p class="text_nivel4">No puede cerrar sesión ya que no hay ninguna sesión de usuario abierta.</p>
    ');
  };

  ?>


  <!-- Botón de regreso a página principal -->
  <nav class="boton1"><a href="index.html">Ir a inicio</a> </nav>


</body>

</html>