<?php 
include('../basedatos/conexion.php');
session_start();

if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }


$sentenciaSQL = $conexion->prepare("INSERT INTO suscripciones (nombre,pago,ciclo,categoria,inicio_sus,tipo_moneda,duracion,in_dura,recordatorio,in_record,id_usuario,id_proveedor) 
VALUES (:nombre,:pago,:ciclo,:categoria,:inicio,:moneda,:duracion,:indura,:recordatorio,:inrecord,:idusuario,0);");
$sentenciaSQL->bindParam(':nombre',$_POST['txtnombresus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':pago',$_POST['txtpagosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':ciclo',$_POST['txtciclosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':categoria',$_POST['txtcategoriasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':inicio',$_POST['txtiniciosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':moneda',$_POST['txtmonedasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':duracion',$_POST['txtduracionsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':indura',$_POST['txtindurasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':recordatorio',$_POST['txtrecordsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':inrecord',$_POST['txtinrecordsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':idusuario',$_SESSION['user_id']);
$sentenciaSQL->execute();

include('listar_sus.php');
?>