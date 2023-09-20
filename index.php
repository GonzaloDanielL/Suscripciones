<?php include('template/cabecera.php');

#### obtener nombre de usuario
if (isset($_SESSION['user_id'])) {
$sentenciaSQL = $conexion->prepare('SELECT id_usuarios, nombre FROM usuarios WHERE id_usuarios = :id');
$sentenciaSQL->bindParam(':id', $_SESSION['user_id']);
$sentenciaSQL->execute();
$results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

$user = null;

if (count($results) > 0) {
    $user = $results;
    }
}

#suscripciones
$txtsearch=(isset($_POST['txtsearch']))?$_POST['txtsearch']:"";
$txtiddetalles=(isset($_POST['detalles']))?$_POST['detalles']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$txtciclotipo = "";


if(empty($txtsearch)){
  $sentenciaSQL = $conexion->prepare("SELECT s.id_suscrip as id_suscrip, s.img as img, s.nombre as nombre, s.pago as pago, s.tipo_moneda as tipo_moneda, s.ciclo as ciclo,
  s.categoria as categoria, s.duracion as duracion, s.in_dura as in_dura, p.nombre as nombrepvd FROM suscripciones s inner join proveedor p on p.id = s.id_proveedor 
  where s.id_usuario = :idusuario");
  $sentenciaSQL->bindParam(':idusuario',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $listasus=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

}

switch($accion){
  case "buscar":
      $sentenciaSQL = $conexion->prepare("SELECT s.id_suscrip as id_suscrip, s.img as img, s.nombre as nombre, s.pago as pago, s.tipo_moneda as tipo_moneda, s.ciclo as ciclo,
      s.categoria as categoria, s.duracion as duracion, s.in_dura as in_dura, p.nombre as nombrepvd FROM suscripciones s inner join proveedor p on p.id = s.id_proveedor 
      where s.id_usuario = :idusuario and s.nombre like concat('%',:nombre,'%')");
      $sentenciaSQL->bindParam(':idusuario',$_SESSION['user_id']);
      $sentenciaSQL->bindParam(':nombre',$txtsearch);
      $sentenciaSQL->execute();
      $listasus=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      break;
      

  case "cancelar":
      $sentenciaSQL = $conexion->prepare("SELECT s.id_suscrip as id_suscrip, s.img as img, s.nombre as nombre, s.pago as pago, s.tipo_moneda as tipo_moneda, s.ciclo as ciclo,
      s.categoria as categoria, s.duracion as duracion, s.in_dura as in_dura, p.nombre as nombrepvd FROM suscripciones s inner join proveedor p on p.id = s.id_proveedor 
      where s.id_usuario = :idusuario");
      $sentenciaSQL->bindParam(':idusuario',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $listasus=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      $txtsearch = "";
      break;

  case "detallesus":
      $_SESSION['detalles'] = $txtiddetalles;
      header("Location:detalles_sus.php");
      break;

  case "detallesuspvd":
      $_SESSION['detalles'] = $txtiddetalles;
      header("Location:detalles_sus_pvd.php");
      break;
}


#proveedor
$txtsearch2=(isset($_POST['txtsearch2']))?$_POST['txtsearch2']:"";
$txtiddetalles2=(isset($_POST['detalles2']))?$_POST['detalles2']:"";
$accion2=(isset($_POST['accion2']))?$_POST['accion2']:"";

if(empty($txtsearch2)){
  $sentenciaSQL = $conexion->prepare("CALL PRO_PROVEEDOR(0,:iduser,'f',0)");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $listapvd=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

}

switch($accion2){

  case "buscar":
      $sentenciaSQL = $conexion->prepare("CALL PRO_PROVEEDOR(1,:iduser,:nombre,0)");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->bindParam(':nombre',$txtsearch2);
      $sentenciaSQL->execute();
      $listapvd=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      break;
      

  case "cancelar":
      $sentenciaSQL = $conexion->prepare("CALL PRO_PROVEEDOR(0,:iduser,'f',0)");
      $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
      $sentenciaSQL->execute();
      $listapvd=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      $txtsearch2 = "";
      break;

  case "detallespvd":
      $_SESSION['detalles'] = $txtiddetalles2;
      header("Location:detalles_pvd.php");
}

?>


<div class="jumbotron">
    <h1 class="display-3 fw-bolder">Bienvenido <?php echo $user['nombre']; ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z"/>
    </svg>
    </h1>
</div>

<!-- listar Proveedores -->
<hr class="my-2">
<p>
<h3 class="fw-normal">Proveedores:</h3>
<div>
    <form method="POST" class="col-lg-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    <label for="txtsearch2">Busqueda:</label>
    <input type="text" class="form-control" value="<?php echo $txtsearch2 ;?>" name="txtsearch2" id="txtsearch2" placeholder="Nombre">
</br>
    <button type="submit" name="accion2" value="buscar" class="btn btn-outline-success btn-sm">Buscar</button>
    <button type="submit" name="accion2" value="cancelar" class="btn btn-outline-info btn-sm">Cancelar</button>
    </form>
    <p>
</div>
<p>

<!-- listar suscripciones -->
<?php foreach($listapvd as $pvd){ ?>
<div class="col-md-3">
    <div class="card shadow p-3 mb-3 border-info bg-body rounded">
        <img class="card-img-top" src="./img/imgpvd/<?php echo $pvd['img']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $pvd['nombre']; ?></h5>
            <h7 class="card-title">telefono: <?php echo $pvd['telefono'];?></h7></br>
            <h7 class="card-title">correo: <?php echo $pvd['correo'];?></h7></br>
            <form method="post">
            <input type="hidden" name="detalles2" id="detalles2" value="<?php echo $pvd['id'];?>"/>
            <button type="submit" name="accion2" value="detallespvd" class="btn btn-outline-info btn-sm">Detalles</button>
            <a href="<?php echo $pvd['sitioweb'];?>" target="_blank">sitio web</a>
          </form>
        </div>
    </div>
</div>
<?php } ?>

<div>
    <a class="btn btn-outline-info" href="editor.php" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
    </svg>    
    Agregar</a>
</div>


<p>
<p>
<hr class="my-2">
<p>
<h3 class="fw-normal">Suscripciones:</h3>


<div>
    <form method="POST" class="col-lg-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    <label for="txtsearch">Busqueda:</label>
    <input type="text" class="form-control" value="<?php echo $txtsearch ;?>" name="txtsearch" id="txtsearch" placeholder="Nombre">
</br>
    <button type="submit" name="accion" value="buscar" class="btn btn-outline-success btn-sm">Buscar</button>
    <button type="submit" name="accion" value="cancelar" class="btn btn-outline-info btn-sm">Cancelar</button>
    </form>
    <p>
</div>
<p>

<!-- listar suscripciones -->
<?php foreach($listasus as $suscri){ 
        switch ($suscri['ciclo']){
            case 365:
                $txtciclotipo = "Diario";
                break;
            case 52:
                $txtciclotipo = "Semanal";
                break;
            case 24:
                $txtciclotipo = "Quicena";
                break;
            case 12:
                $txtciclotipo = "Mensual";
                break;
            case 6:
                $txtciclotipo = "Bimestre";
                break;
            case 4:
                $txtciclotipo = "Trimestre";
                break;
            case 2:
                $txtciclotipo = "Semestre";
                break;
            case 1:
                $txtciclotipo = "Anual";
                break;
            }
    ?>
<div class="col-md-3">
    <div class="card shadow p-3 mb-3 border-info bg-body rounded">
        <img class="card-img-top" src="./img/imgsus/<?php echo $suscri['img']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $suscri['nombre']; ?></h5>
            <h7 class="card-title">Proveedor: <?php echo $suscri['nombrepvd']; ?></h7></br>
            <h7 class="card-title">pago: <?php echo $suscri['pago']; echo $suscri['tipo_moneda']; ?></h7></br>
            <h7 class="card-title">ciclo: <?php echo $txtciclotipo; ?></h7></br>
            <h7 class="card-title">categoria: <?php echo $suscri['categoria']; ?></h7></br>
            <h7 class="card-title">Duración: <?php echo $suscri['duracion']; echo " "; echo $suscri['in_dura'];?></h7></br>
            <div class="d-grid gap-2 d-md-block">
            <form method="post">
            <input type="hidden" name="detalles" id="detalles" value="<?php echo $suscri['id_suscrip'];?>"/>
            <button type="submit" name="accion" value="detallesus" class="btn btn-outline-info btn-sm">Detalles</button>
            <button type="submit" name="accion" value="detallesuspvd" class="btn btn-outline-info btn-sm">Proveedor</button>
          </form>
        </div>
        </div>
    </div>
</div>
<?php } ?>

<div>
    <a class="btn btn-outline-info" href="editor.php" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
    </svg>    
    Agregar</a>
</div>
<p>
<hr class="my-2">
<p>

<?php include('template/pie.php'); ?>