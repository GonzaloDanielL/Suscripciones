<!DOCTYPE html>
<?php
  session_start();

  include('basedatos/conexion.php');

  if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }


  if (isset($_SESSION['user_edit'])) {
    $num = $_SESSION['user_edit'];
  };

  if (isset($_SESSION['user_fondo'])) {
    $fondo = $_SESSION['user_fondo'];
  };

  $txtfondo=(isset($_FILES['txtfondo']['name']))?$_FILES['txtfondo']['name']:"";
  $num2=(isset($_POST['accion']))?$_POST['accion']:"";

  $sentenciaSQL = $conexion->prepare("SELECT fondo FROM usuarios where id_usuarios = :idusuario");
  $sentenciaSQL->bindParam(':idusuario',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $listafondo=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



switch($num2){
    case "1":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 1 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "2":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 2 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "3":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 3 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;
  
    case "4":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 4 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
  
      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "5":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 5 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "6":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 6 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "7":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 7 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "8":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 8 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "9":
      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set edit = 9 where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_edit'] = $resultado['edit'];
      header("Location:config.php");
      break;

    case "aplicar":

      $sentenciaSQL = $conexion->prepare("SELECT fondo from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $buscarimg = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);


      if(isset($buscarimg["fondo"]) &&($buscarimg["fondo"]!="imagen.jpg") ){

        if(file_exists("./img/imgfondo/".$buscarimg["fondo"])){

            unlink("./img/imgfondo/".$buscarimg["fondo"]);
          }

      }

      $fecha = new DateTime();
      $nombrearchivo = ($txtfondo!="")?$fecha->getTimestamp()."-".$_FILES["txtfondo"]["name"]:"imagen.jpg";
      
      $tmpImagen=$_FILES["txtfondo"]["tmp_name"];

      if($tmpImagen!=""){

          move_uploaded_file($tmpImagen,"./img/imgfondo/".$nombrearchivo);
      }

      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set fondo = :fondo where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':fondo',$nombrearchivo);
      $sentenciaSQL->bindParam(':iduser', $_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_fondo'] = $resultado['fondo'];
      header("Location:config.php");
      break;

    case "limpiar":

      $sentenciaSQL = $conexion->prepare("SELECT fondo from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $buscarimg = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
  
  
      if(isset($buscarimg["fondo"]) &&($buscarimg["fondo"]!="imagen.jpg") ){
  
        if(file_exists("./img/imgfondo/".$buscarimg["fondo"])){
  
            unlink("./img/imgfondo/".$buscarimg["fondo"]);
          }
      }

      $sentenciaSQL = $conexion->prepare("UPDATE usuarios set fondo = 'no' where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();

      $sentenciaSQL = $conexion->prepare("SELECT * from usuarios where id_usuarios = :iduser");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $resultado = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_fondo'] = $resultado['fondo'];
      header("Location:config.php");
      break;
  }

    switch($num){
      case 1:
        $edit = 'flatly.min.css';
        break;
  
      case 2:
        $edit = 'litera.min.css';
        break;
  
      case 3:
        $edit = 'lumen.min.css';
        break;
  
      case 4:
        $edit = 'quartz.min.css';
        break;
  
      case 5:
        $edit = 'sketchy.min.css';
        break;
  
      case 6:
        $edit = 'slate.min.css';
        break;
  
      case 7:
        $edit = 'solar.min.css';
        break;
  
      case 8:
        $edit = 'vapor.min.css';
        break;
  
      case 9:
        $edit = 'zephyr.min.css';
        break;
  
    }
  ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suscripciones</title>
    <link rel="icon" href="img/imgweb/icono.png" type="image/ico">
    <link rel="stylesheet" href="css/<?php echo $edit;?>"/>    
    <style>
      .fondo{

        background-shading: 100%; 
        background-overlay: rgba(0, 0, 0, 0.6);
        background-image: url(./img/imgfondo/<?php echo $fondo;?>); 
        background-position: center; 
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
        background-brightness: 100%;
        background-contrast: 100%; 
        background-saturation: 100%; 
        background-invert: 0%; 
        background-grayscale: 0%; 
        background-sepia: 0%; 
        background-blur: 0px;
        background-blur: blur(2px); backdrop-filter: blur(2px);
      }

    </style>
</head>
<body class ="fondo">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="funcion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<header class="p-3 bg-primary text-white">
<form method="POST">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="gastos.php" class="nav-link px-2 text-white">Gastos</a></li>
          <li><a href="editor.php" class="nav-link px-2 text-white">Editor</a></li>
          <li><a href="config.php" class="nav-link px-2 text-white">Configuración</a></li>
        </ul>

        <!--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>-->

        <div class="text-end">
          <a href="cuenta/cerrar_sesion.php"><button type="button" class="btn btn-outline-success">Login</button></a>
          <a href="cuenta/crear_cuenta.php"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
        </div>
        </form>
      </div>
    </div>
</form>
  </header>
    <div class="container">
        <br/>

        <div class="row">