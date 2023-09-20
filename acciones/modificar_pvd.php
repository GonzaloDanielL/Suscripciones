<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("UPDATE proveedor set nombre = :nombre, telefono = :telefono, correo = :correo,
servicios = :servicios, sitioweb = :sitio where id = :idpvd;");
$sentenciaSQL->bindParam(':nombre',$_POST['txtnombrepvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':telefono',$_POST['txttelefonopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':correo',$_POST['txtcorreopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':servicios',$_POST['txtserviciospvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':sitio',$_POST['txtsitiopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':idpvd',$_POST['txtidpvd'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listar_pvd.php');
?>