<?php
  session_start();
  session_destroy();
  include('../basedatos/conexion.php');


  if($_POST){
    $sentenciaSQL = $conexion->prepare('SELECT nombre FROM usuarios where nombre = :nombre');
    $sentenciaSQL->bindParam(':nombre', $_POST['usuario']);
    $sentenciaSQL->execute();
    $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    if ($results >= 1){
      $mensaje = 'el nombre de usuario ya esta en uso';

    }else{

      if ($_POST['password'] == ($_POST['password2'])){
        if (!empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['password'])) {
          $sql = "INSERT INTO usuarios (nombre, correo,contra,edit) VALUES (:nombre, :correo, :contra, 1)";
          $sentenciaSQL = $conexion->prepare($sql);
          $sentenciaSQL->bindParam(':nombre', $_POST['usuario']);
          $sentenciaSQL->bindParam(':correo', $_POST['correo']);
          $sentenciaSQL->bindParam(':contra', $_POST['password']);

          if ($sentenciaSQL->execute()) {
            $mensaje = 'registro exitoso';

          } else {
            $mensaje = 'error';
          }
        }
      }else {
        $mensaje = 'las contraseñas no coinciden';
      }
    }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/slate.min.css"/>  
  </head>
  <body>
  <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <div class="card-body">
              <?php if(isset($mensaje)) {?>
                <div class="alert alert-info" role="alert">
                  <?php echo $mensaje; ?>
                </div>
                <?php } ?>

            <h3 class="mb-5">Crear cuenta</h3>
            
              <form method="POST">
                <div class="form-outline mb-4">
                  <input type="text" name="correo" placeholder="escriba su email" required class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="usuario" placeholder="escriba una clave de usuario" required class="form-control form-control-lg" autocomplete="off" />
                  <label class="form-label" for="typeEmailX">usuario</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" placeholder="cree una contraseña" required class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password2" placeholder="repita la contraseña" required class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">repetir Password</label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">crear</button>
              </form>

          </div>
        </div>
      </div>
      <span>ya tiene una cuenta? inicie <a href="./inicio_sesion.php" class="link-info">Sesion</a></span>
    </div>
  </div>
</section>

  </body>
</html>