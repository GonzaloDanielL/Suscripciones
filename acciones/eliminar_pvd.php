<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("DELETE FROM proveedor WHERE id = :id");
$sentenciaSQL->bindParam(':id',$_POST['txtidpvd'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listar_pvd.php');
?>