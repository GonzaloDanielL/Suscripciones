<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("UPDATE suscripciones set nombre = :nombre, pago = :pago, ciclo = :ciclo, categoria = :categoria, inicio_sus = :inicio,
tipo_moneda = :moneda, duracion = :duracion, in_dura = :indura, recordatorio = :record, in_record = :inrecord where id_suscrip = :idsus;");
$sentenciaSQL->bindParam(':nombre',$_POST['txtnombresus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':pago',$_POST['txtpagosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':ciclo',$_POST['txtciclosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':categoria',$_POST['txtcategoriasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':inicio',$_POST['txtiniciosus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':moneda',$_POST['txtmonedasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':duracion',$_POST['txtduracionsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':indura',$_POST['txtindurasus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':record',$_POST['txtrecordsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':inrecord',$_POST['txtinrecordsus'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':idsus',$_POST['txtidsus'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listar_sus.php');
?>