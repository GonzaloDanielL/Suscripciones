<?php include("../basedatos/conexion.php"); 
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$txtcambio = (isset($_POST['txtcambio']))?$_POST['txtcambio']:"";
$txtnombre = (isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtnombre2 = (isset($_POST['txtnombre2']))?$_POST['txtnombre2']:"";
$txtcontra = (isset($_POST['txtcontra']))?$_POST['txtcontra']:"";

switch($txtcambio){
    case 'cambiar':
        $sentenciaSQL = $conexion->prepare('SELECT nombre FROM usuarios WHERE nombre = :nombre');
        $sentenciaSQL->bindParam(':nombre', $txtnombre2);
        $sentenciaSQL->execute();
        $results1 = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

        if ($results1 >= 1){
            $error = 'ese nombre de usuario ya esta en uso';
            break;
        }

        $sentenciaSQL = $conexion->prepare('SELECT nombre,contra FROM usuarios WHERE nombre = :nombre');
        $sentenciaSQL->bindParam(':nombre', $txtnombre);
        $sentenciaSQL->execute();
        $results = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

        if ($results >= 1){
            if($txtcontra == $results['contra']){
                $sentenciaSQL = $conexion->prepare('UPDATE usuarios SET nombre = :nombre2 where nombre = :nombre');
                $sentenciaSQL->bindParam(':nombre', $txtnombre);
                $sentenciaSQL->bindParam(':nombre2', $txtnombre2);
                $sentenciaSQL->execute();
                $error = 'Nombre de Usuario actualizado';
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
                <h1 class="display-3">Actualizacion de Nombre de Usuario</h1>
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
                    <label for="txtnombre">ingrese su antiguo Usuario:</label>
                    </p>
                    <input type="text" class="form-control" value="<?php echo $txtnombre; ?>" name="txtnombre" id="txtnombre" placeholder="usuario">
                    </p>
                    <label for="txtnombre2">ingrese su nuevo Usuario:</label>
                    </p>
                    <input type="text" class="form-control" value="<?php echo $txtnombre2; ?>" name="txtnombre2" id="txtnombre2" placeholder="nuevo usuario">
                    </p>
                    <label for="txtcontra">ingrese su contraseña:</label>
                    </p>
                    <input type="password" class="form-control" value="<?php echo $txtcontra; ?>" name="txtcontra" id="txtcontra" placeholder="contraseña">
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