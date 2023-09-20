<?php

  require('../basedatos/conexion.php');

  session_start();

    if (isset($_SESSION['user_id'])) {
      header('Location:../index.php');
    }

    ### inicio de sesion
    if($_POST){
      $sentenciaSQL = $conexion->prepare('SELECT id_usuarios,nombre,contra,edit,fondo FROM usuarios WHERE nombre = :nombre');
      $sentenciaSQL->bindParam(':nombre', $_POST['nombre']);
      $sentenciaSQL->execute();
      $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    
    #### comprobar si los datos son vacios
      if (empty($_POST['nombre']) && empty($_POST['password'])){
        $mensaje = 'los campos estan vacios';
        $_POST['nombre'] == "";
        $_POST['password'] == "";

      }else{
        ### comprobar si se encontro lo datos en la BD
        if ($results >= 1){
          #### comprobar contraseña
          if ($_POST['password'] == $results['contra']) {
            $mensaje = 'iniciando....';
            $_SESSION['user_id'] = $results['id_usuarios'];
            $_SESSION['user_edit'] = $results['edit'];
            $_SESSION['user_fondo'] = $results['fondo'];
            header('Location:../index.php');

          } else {
            $mensaje = 'contraseña incorrecta';
            $_POST['nombre'] == "";
            $_POST['password'] == "";
          }

        }else{
          $mensaje = 'los datos son incorrectos';
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
                <div class="alert alert-danger" role="alert">
                  <?php echo $mensaje; ?>
                </div>
                <?php } ?>

            <h3 class="mb-5">Iniciar Sesion</h3>
            
              <form method="POST">
                <div class="form-outline mb-4">
                  <input type="text" name="nombre" placeholder="escriba su usuario" class="form-control form-control-lg" autocomplete="off"/>
                  <label class="form-label" for="typeEmailX">Usuario</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" placeholder="escriba su contraseña" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
              </form>

          </div>
        </div>
      </div>
      <span>no tienes cuenta? <a href="./crear_cuenta.php" class="link-info">Registrate</a></span>
    </div>
  </div>
</section>
  </body>
</html>