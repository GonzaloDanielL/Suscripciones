<?php include("template/cabecera.php"); 


$cambiar=(isset($_POST['cambiar']))?$_POST['cambiar']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";

switch ($cambiar){
    case "Aplicar":
        $sentenciaSQL = $conexion->prepare('SELECT id FROM proveedor where nombre = :nombre and id_usuario = :iduser');
        $sentenciaSQL->bindParam(':nombre', $txtnombre);
        $sentenciaSQL->bindParam(':iduser', $_SESSION['user_id']);
        $sentenciaSQL->execute();
        $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

        if($results >= 1){
            $sentenciaSQL = $conexion->prepare('UPDATE suscripciones SET id_proveedor = :idpvd where id_suscrip = :idsus');
            $sentenciaSQL->bindParam(':idpvd', $results['id']);
            $sentenciaSQL->bindParam(':idsus', $_SESSION['detalles']);
            $sentenciaSQL->execute();
            $error = "se aplico correctamente el proveedor";

        }else{
            $error = "no se encontro resultado con ese nombre de proveedor";
        }
}

$sentenciaSQL = $conexion->prepare("CALL PRO_PROVEEDOR(0,:iduser,'f',0)");
$sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
$sentenciaSQL->execute();
$listaproveedores=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT s.nombre as nombresus, p.nombre as nombrepvd FROM suscripciones s INNER JOIN proveedor p on p.id = s.id_proveedor
where s.id_suscrip = :idsus");
$sentenciaSQL->bindParam(':idsus',$_SESSION['detalles']);
$sentenciaSQL->execute();
$resultdetalles = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

?>
<hr class="my-2">
<p>
<div class="jumbotron">
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <?php if(isset($error)) {?>
                <div class="alert alert-info" role="alert">
                  <?php echo $error; ?>
                </div>
                <?php } ?>
                <strong class="d-inline-block mb-2 text-primary">Proveedor</strong>
                <h2>Asignar o cambiar proveedor para <?php echo $resultdetalles['nombresus'];?></h2>
                <h4 class="fw-normal">Proveedor = <?php echo $resultdetalles['nombrepvd'];?></h4>
                <div class="col-md-6">
                    <p>
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" name="txtnombre" id="txtnombre" required placeholder="nombre proveedor">
                        </div>
                        </p>
                        <input type="submit" name="cambiar" value="Aplicar" class="btn btn-outline-success"/>
                        <p>
                    </form>
                    <a class="btn btn-outline-info" href="index.php" role="button">Regresar</a>
                    <a class="btn btn-outline-info" href="editor.php" role="button">Editar</a>
                </div>
            </div>

            <div class="col p-4">
            <h2>Lista de Proveedores</h2>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>servicios</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($listaproveedores as $listpvd) {?>
                    <tr>
                        <td><?php echo $listpvd['nombre'];?></td>
                        <td><?php echo $listpvd['servicios'];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<hr class="my-2">
<?php include("template/pie.php");?>