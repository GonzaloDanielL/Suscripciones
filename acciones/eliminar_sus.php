<?php 
include('../basedatos/conexion.php');
session_start();
if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }

$sentenciaSQL = $conexion->prepare("SELECT img FROM suscripciones where id_suscrip=:id");
$sentenciaSQL->bindParam(':id',$_POST['txtidsus'],PDO::PARAM_STR);
$sentenciaSQL->execute();
$lista=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

if(isset($lista["img"]) &&($lista["img"]!="imagen.jpg") ){

    if(file_exists("../img/imgsus/".$lista["img"])){

        unlink("../img/imgsus/".$lista["img"]);
    }

}

$sentenciaSQL = $conexion->prepare("DELETE FROM suscripciones WHERE id_suscrip = :id");
$sentenciaSQL->bindParam(':id',$_POST['txtidsus'],PDO::PARAM_STR);
$sentenciaSQL->execute();

include('listar_sus.php');
?>