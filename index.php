<!DOCTYPE html>
<html lang="es">
<?php include_once "php/head.php"; ?>

<body>

  <?php
  $sections = [
    "header" => "php/header.php",
    "inicioSection" => "php/inicioSection.php",
    "cartasSection" => "php/cartasSection.php",
    "contactoSection" => "php/contactoSection.php",
    "footer" => "php/footer.php",
  ];

  foreach ($sections as $section) {
    include_once $section;
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="js/navbar.js"></script>
  <script src="js/form.js"></script>
</body>

</html>