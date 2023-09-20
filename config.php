<?php include("template/cabecera.php");

if (isset($_SESSION['user_id'])) {
  $sentenciaSQL = $conexion->prepare('SELECT id_usuarios, nombre, correo FROM usuarios WHERE id_usuarios = :id');
  $sentenciaSQL->bindParam(':id', $_SESSION['user_id']);
  $sentenciaSQL->execute();
  $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    
  $user = null;
    
  if (count($results) > 0) {
      $user = $results;
      }
  }

  $txtcambiar=(isset($_POST['txtcambiar']))?$_POST['txtcambiar']:"";


  switch($txtcambiar){

      case 'Correo':
        header('Location:cuenta/cambiar_correo.php');
        break;

      case 'Usuario':
        header('Location:cuenta/cambiar_usuario.php');
        break;

      case 'Contraseña':
        header('Location:cuenta/cambiar_contra.php');
        break;

  }


?>

<div class="jumbotron">
  <h1 class="display-3 fw-bolder">Edicion de aplicacion y cuenta 
  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
  </svg>
  </h1>
</div>

<hr class="my-2">
<p>

<div class="card shadow p-3 mb-3 border-info bg-body">
  <h3 class="fw-normal">Configuración de cuenta:</h3>
  <hr class="my-2">
  <h6 class="lead">Cuenta:</h6>
  <p>

  <div class="row">
    <div class="col-6 col-sm-3">Correo electronico:</div>
    <div class="col-6 col-sm-3"><?php echo $user['correo'];?></div>
    <div class="w-100 d-none d-md-block"></div>
    <div class="col-6 col-sm-3">Nombre de usuario:</div>
    <div class="col-6 col-sm-3"><?php echo $user['nombre'];?></div>
  </div>

  <p>
  <p>

  <form method="POST" class="col-lg-3">
    <div class="form-group">
      <h6 class="lead">Cambiar:</h6>
      <p>
      <label for="txtcambiar">Correo</label>
      <button type="submit" name="txtcambiar" value="Correo" class="btn btn-outline-warning btn-sm">Cambiar</button></br></p>
      <label for="txtcambiar">Usuario</label>
      <button type="submit" name="txtcambiar" value="Usuario" class="btn btn-outline-warning btn-sm">Cambiar</button></br></p>
      <label for="txtcambiar">Contraseña</label>
      <button type="submit" name="txtcambiar" value="Contraseña" class="btn btn-outline-warning btn-sm">Cambiar</button></br></p>
    </div>
  </form>

</div>
</p>

<div class="card shadow p-3 mb-3 border-info bg-body">

  <div>
    <h3 class="fw-normal">Apariencia de la app:</h3>
  </div>

  <hr class="my-2">

  <div>
    <h3 class="lead">Temas:</h3>
    </p>

    <form method="POST" class="col-lg-3 ">
      <div class="form-group">
        <button type="submit" name="accion" value="1" class="list-group-item list-group-item-action">Flatly</button>
        <button type="submit" name="accion" value="2" class="list-group-item list-group-item-action">Litera</button>
        <button type="submit" name="accion" value="3" class="list-group-item list-group-item-action">Lumen</button>
        <button type="submit" name="accion" value="4" class="list-group-item list-group-item-action">Quartz</button>
        <button type="submit" name="accion" value="5" class="list-group-item list-group-item-action">Sketchy</button>
        <button type="submit" name="accion" value="6" class="list-group-item list-group-item-action">Slate</button>
        <button type="submit" name="accion" value="7" class="list-group-item list-group-item-action">Solar</button>
        <button type="submit" name="accion" value="8" class="list-group-item list-group-item-action">Vapor</button>
        <button type="submit" name="accion" value="9" class="list-group-item list-group-item-action">zephyr</button>
      </div>
    </form>
    
  </div>

  </p>
  </p>

  <div>
    <h3 class="lead">Fondo:</h3>
    </p>
    <form method="POST" class="col-lg-3" enctype="multipart/form-data">

      <div class="form-group">
        <input type="file" class="form-control"  name="txtfondo" id="txtfondo" placeholder="imagen">
      </div>

      <h6 class="text-info fst-italic" style="--bs-text-opacity: .7;">preferible subir una imagen de tamaño 1920 x 1080</br>formatos recomendables: png o jpg.</h6>

      <div aria-label="">
        <button type="submit" name="accion" value="aplicar" class="btn btn-outline-success">Aplicar</button>
        <button type="submit" name="accion" value="limpiar" class="btn btn-outline-info">Limpiar</button>
      </div>

    </form>
  </div>
</div>

<hr class="my-2">

<?php include("template/pie.php");?>