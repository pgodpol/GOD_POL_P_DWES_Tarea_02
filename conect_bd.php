<?php
include_once('head.php');
?>

<body>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ud2_test";

  try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* solo uso el mensaje en fase de pruebas
  echo "Conexión correcta a base de datos."; */
  } catch (PDOException $e) {
    echo "La conexión ha fallado: " . $e->getMessage();
  }

  ?>

</body>

</html>