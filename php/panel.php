<?php
session_start();

require_once "config.php";
include_once "head.php";
?>

<body>
<a href="logout.php">Cerrar Sesion</a>
  <?php
   echo $_SESSION['nivel'];
  if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] == 'usuario') {
    die( "<h1>No tienes permisos para ver esta página</h1>");
  }

  ?>

</body>