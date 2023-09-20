<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("DELETE FROM exproveedor WHERE id = :id");
$sentenciaSQL->bindParam(':id',$_POST['txtidpvd'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listarpapelera_pvd.php');
?>