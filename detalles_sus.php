<?php include("template/cabecera.php"); 


$cambiar=(isset($_POST['cambiar']))?$_POST['cambiar']:"";
$txtimg = (isset($_FILES['txtimg']['name']))?$_FILES['txtimg']['name']:"";

switch ($cambiar){
    case "Cambiar Imagen":
        if($txtimg!=""){

            $fecha = new DateTime();
            $nombrearchivo = ($txtimg!="")?$fecha->getTimestamp()."-".$_FILES["txtimg"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtimg"]["tmp_name"];

            move_uploaded_file($tmpImagen,"img/imgsus/".$nombrearchivo);

            $sentenciaSQL = $conexion->prepare("SELECT img FROM suscripciones where id_suscrip=:id");
            $sentenciaSQL->bindParam(':id',$_SESSION['detalles']);
            $sentenciaSQL->execute();
            $lista=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    
            if(isset($lista["img"]) &&($lista["img"]!="imagen.jpg") ){
    
                if(file_exists("img/imgsus/".$lista["img"])){
    
                    unlink("img/imgsus/".$lista["img"]);
                }
    
            }

            $sentenciaSQL = $conexion->prepare("UPDATE suscripciones set img = :img where id_usuario = :id and id_suscrip = :sus");
            $sentenciaSQL->bindParam(':img',$nombrearchivo);
            $sentenciaSQL->bindParam(':id', $_SESSION['user_id']);
            $sentenciaSQL->bindParam(':sus', $_SESSION['detalles']);
            $sentenciaSQL->execute();
            break;
        }
}

$sentenciaSQL = $conexion->prepare("CALL PRO_SUSCRIPCIONES(2,:id,'f',:sus)");
$sentenciaSQL->bindParam(':id', $_SESSION['user_id']);
$sentenciaSQL->bindParam(':sus', $_SESSION['detalles']);
$sentenciaSQL->execute();
$resultdetalles = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);


switch ($resultdetalles['ciclo']){
    case 365:
        $ciclo = "Diario";
        break;
    case 52:
        $ciclo = "Semanal";
        break;
    case 24:
        $ciclo = "Quicena";
        break;
    case 12:
        $ciclo = "Mensual";
        break;
    case 6:
        $ciclo = "Bimestre";
        break;
    case 4:
        $ciclo = "Trimestre";
        break;
    case 2:
        $ciclo = "Semestre";
        break;
    case 1:
        $ciclo = "Anual";
        break;
}

?>
<hr class="my-2">
<p>
<div class="jumbotron">
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Detalles</strong>
            <h2 class="display-3 fw-bolder"><?php echo $resultdetalles['nombre'];?></h2>

            <h4 class="fw-normal">Pago = <?php echo $resultdetalles['pago']; echo $resultdetalles['tipo_moneda']?></h4>
            <h4 class="fw-normal">Ciclo = <?php echo $ciclo;?></h4>
            <h4 class="fw-normal">Categoria = <?php echo $resultdetalles['categoria'];?></h4>
            <h4 class="fw-normal">Inicio de la Suscripcion = <?php echo $resultdetalles['inicio_sus'];?></h4>
            <h4 class="fw-normal">Duracion = <?php echo $resultdetalles['duracion']; echo " "; echo $resultdetalles['in_dura'];?></h4>
            <h4 class="fw-normal">Recordatorio = <?php echo $resultdetalles['recordatorio']; echo " "; echo $resultdetalles['in_record'];?></h4>

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
                <img src="img/imgsus/<?php echo $resultdetalles['img']?>" class="rounded float-end" width="450" height="400">
            </div>
        </div>
    </div>
</div>

<hr class="my-2">
<?php include("template/pie.php");?>