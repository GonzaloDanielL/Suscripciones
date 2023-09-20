<?php include("../basedatos/conexion.php"); 
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$txtcambio = (isset($_POST['txtcambio']))?$_POST['txtcambio']:"";
$txtnombre = (isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtcontra = (isset($_POST['txtcontra']))?$_POST['txtcontra']:"";
$txtcorreo = (isset($_POST['txtcorreo']))?$_POST['txtcorreo']:"";

switch($txtcambio){
    case 'cambiar':
        $sentenciaSQL = $conexion->prepare('SELECT nombre,correo,contra FROM usuarios WHERE nombre = :nombre');
        $sentenciaSQL->bindParam(':nombre', $txtnombre);
        $sentenciaSQL->execute();
        $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

        if ($results >= 1){
            if($txtcontra == $results['contra']){
                $sentenciaSQL = $conexion->prepare('UPDATE usuarios SET correo = :correo where nombre = :nombre');
                $sentenciaSQL->bindParam(':nombre', $txtnombre);
                $sentenciaSQL->bindParam(':correo', $txtcorreo);
                $sentenciaSQL->execute();
                $error = 'correo actualizado';
                break;

            }else{
                $error = 'la contraseña no es correcta';
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
                <h1 class="display-3">Actualizacion de Correo Electronico</h1>
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
                    <label for="txtnombre">ingrese su Nombre de Usuario:</label>
                    </p>
                    <input type="text" class="form-control" value="<?php echo $txtnombre; ?>" name="txtnombre" id="txtnombre" placeholder="usuario">
                    </p>
                    <label for="txtcontra">ingrese su contraseña:</label>
                    </p>
                    <input type="password" class="form-control" value="<?php echo $txtcontra; ?>" name="txtcontra" id="txtcontra" placeholder="contraseña">
                    </p>
                    <label for="txtcorreo">Ingrese el nuevo correo:</label>
                    </p>
                    <input type="text" class="form-control" value="<?php echo $txtcorreo; ?>" name="txtcorreo" id="txtcorreo" placeholder="correo">
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