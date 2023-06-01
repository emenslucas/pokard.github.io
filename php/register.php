<!DOCTYPE html>
<html lang="es">
  <?php include_once "head.php"; ?>

  <body>
    <section id="register">
    <div class="container gap-5 d-flex align-items-center justify-content-center flex-column vh-100 vw-100">
      <h1 class="text-center">Crea tu cuenta</h1>
      <form action="" method="POST" onsubmit="">
        <div class="row">
          <div class="col-12">
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user" required />
          </div>
          <div class="col-12">
            <label for="user">Correo electrónico</label>
            <input type="text" name="user" id="user" required />
          </div>
          <div class="col-12">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="col-12">
            <label for="password">Confirmar contraseña</label>
            <input type="password" name="password" id="password" required />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button class="btnSubmit w-100" type="submit">Confirmar</button>
          </div>
        </div>
      </form>
    </div>
    </section>
   
    <div class="bkgCircle" id="bkgCircleOrange"></div>
    <div class="bkgCircle" id="bkgCircleGreen"></div>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
    <script src="js/form.js"></script>
  </body>
</html>
