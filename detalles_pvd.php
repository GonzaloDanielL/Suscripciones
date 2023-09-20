<?php include("template/cabecera.php"); 


$cambiar=(isset($_POST['cambiar']))?$_POST['cambiar']:"";
$txtimg = (isset($_FILES['txtimg']['name']))?$_FILES['txtimg']['name']:"";

switch ($cambiar){
    case "Cambiar Imagen":
        if($txtimg!=""){

            $fecha = new DateTime();
            $nombrearchivo = ($txtimg!="")?$fecha->getTimestamp()."-".$_FILES["txtimg"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtimg"]["tmp_name"];

            move_uploaded_file($tmpImagen,"img/imgpvd/".$nombrearchivo);

            $sentenciaSQL = $conexion->prepare("SELECT img FROM proveedor where id = :id");
            $sentenciaSQL->bindParam(':id',$_SESSION['detalles']);
            $sentenciaSQL->execute();
            $lista=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    
            if(isset($lista["img"]) &&($lista["img"]!="imagen.jpg") ){
    
                if(file_exists("img/imgpvd/".$lista["img"])){
    
                    unlink("img/imgpvd/".$lista["img"]);
                }
    
            }

            $sentenciaSQL = $conexion->prepare("UPDATE proveedor set img = :img where id_usuario = :iduser and id = :id");
            $sentenciaSQL->bindParam(':img',$nombrearchivo);
            $sentenciaSQL->bindParam(':iduser', $_SESSION['user_id']);
            $sentenciaSQL->bindParam(':id', $_SESSION['detalles']);
            $sentenciaSQL->execute();
            break;
        }
}

$sentenciaSQL = $conexion->prepare("CALL PRO_PROVEEDOR(2,:iduser,'f',:id)");
$sentenciaSQL->bindParam(':iduser', $_SESSION['user_id']);
$sentenciaSQL->bindParam(':id', $_SESSION['detalles']);
$sentenciaSQL->execute();
$resultdetalles = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

?>
<hr class="my-2">
<p>
<div class="jumbotron">
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Detalles</strong>
            <h2 class="display-3 fw-bolder"><?php echo $resultdetalles['nombre'];?></h2>

            <h4 class="fw-normal">Telefono = <?php echo $resultdetalles['telefono'];?></h4>
            <h4 class="fw-normal">Correo = <?php echo $resultdetalles['correo'];?></h4>
            <h4 class="fw-normal">Servicios = <?php echo $resultdetalles['servicios'];?></h4>
            <h4 class="fw-normal">Sitio Web = <a href="<?php echo $resultdetalles['sitioweb'];?>" target="_blank"><?php echo $resultdetalles['sitioweb'];?></a></h4>

            <div class="col-md-6">
                <a class="btn btn-outline-info" href="index.php" role="button">Regresar</a>
                <a class="btn btn-outline-info" href="editor.php" role="button">Editar</a>
                <p>
                <form method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                    <input type="file" class="form-control" name="txtimg" id="txtimg" required placeholder="imagen">
                    </div>
                    </p>
                    <input type="submit" name="cambiar" value="Cambiar Imagen" class="btn btn-outline-success"/>
                </form>
            </div>

            </div>
                <div class="col p-4">
                <img src="img/imgpvd/<?php echo $resultdetalles['img']?>" class="rounded float-end" width="450" height="400">
            </div>
        </div>
    </div>
</div>

<hr class="my-2">
<?php include("template/pie.php");?>