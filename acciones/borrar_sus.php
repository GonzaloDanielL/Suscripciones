<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("DELETE FROM papelera WHERE id = :id");
$sentenciaSQL->bindParam(':id',$_POST['txtidsus'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listarpapelera_sus.php');
?>