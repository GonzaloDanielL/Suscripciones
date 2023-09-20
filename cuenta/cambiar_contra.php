<?php include("../basedatos/conexion.php"); 
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$txtcambio = (isset($_POST['txtcambio']))?$_POST['txtcambio']:"";
$txtnombre = (isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtcontra = (isset($_POST['txtcontra']))?$_POST['txtcontra']:"";
$txtcontra2 = (isset($_POST['txtcontra2']))?$_POST['txtcontra2']:"";

switch($txtcambio){
    case 'cambiar':
        $sentenciaSQL = $conexion->prepare('SELECT nombre,correo,contra FROM usuarios WHERE nombre = :nombre');
        $sentenciaSQL->bindParam(':nombre', $txtnombre);
        $sentenciaSQL->execute();
        $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

        if ($results >= 1){
            if($txtcontra == $results['contra']){
                $sentenciaSQL = $conexion->prepare('UPDATE usuarios SET contra = :contra where nombre = :nombre');
                $sentenciaSQL->bindParam(':nombre', $txtnombre);
                $sentenciaSQL->bindParam(':contra', $txtcontra2);
                $sentenciaSQL->execute();
                $error = 'contraseña actualizada';
                break;

            }else{
                $error = 'la antigua contraseña no es correcta';
                break;
            }
        }else{
            $error = 'nombre de usuario incorrecto';
            break;
        }
        break;

    case 'iniciar':
        header('Location:cerrar_sesion.php');
        break;

    case 'cancelar':
        header('Location:../config.php');
        break;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripciones</title>
    <link rel="stylesheet" href="../css/slate.min.css"/>
</head>
<body>
    <div class="container">
    <br/>
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-3">Configuracion de Contraseña</h1>
                <h3 class="lead"></h3>
                <hr class="my-2">
            </div>
            </p>
            <div>
            <?php if(isset($error)) {?>
                <div class="alert alert-info" role="alert">
                  <?php echo $error; ?>
                </div>
                <?php } ?>
                <form method="POST" class="col-lg-4">   
                    </p>
                    <label for="txtnombre">Ingrese su Nombre de Usuario:</label>
                    </p>
                    <input type="text" class="form-control" value="<?php echo $txtnombre; ?>" name="txtnombre" id="txtnombre" placeholder="nombre de usuario">
                    </p>
                    <label for="txtcontra">Contraseña antigua:</label>
                    </p>
                    <input type="password" class="form-control" value="<?php echo $txtcontra; ?>" name="txtcontra" id="txtcontra" placeholder="contraseña">
                    </p>
                    <label for="txtcontra2">Nueva Contraseña:</label>
                    </p>
                    <input type="password" class="form-control" value="<?php echo $txtcontra2; ?>" name="txtcontra2" id="txtcontra2" placeholder="contraseña">
            </div>
            </p>
            <div>
                <button type="submit" name="txtcambio" value="cambiar" class="btn btn-outline-warning btn-sm">Cambiar</button>
                <button type="submit" name="txtcambio" value="iniciar" class="btn btn-outline-success btn-sm">iniciar sesion</button>
                <button type="submit" name="txtcambio" value="cancelar" class="btn btn-outline-info btn-sm">volver</button>
            </div>
            </form>
        </div>
    </div>
</body>