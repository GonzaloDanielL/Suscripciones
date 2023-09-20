<?php 
include('../basedatos/conexion.php');
session_start();

if(empty($_SESSION['user_id'])){
    header('Location:cuenta/inicio_sesion.php');
  }


$sentenciaSQL = $conexion->prepare("SELECT max(id) + 1 as idpvd from proveedor");
$sentenciaSQL->execute();
$newidpvd = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("INSERT INTO proveedor (id,nombre,telefono,correo,servicios,sitioweb,id_usuario) 
VALUES (:id,:nombre,:telefono,:correo,:servicios,:sitio,:iduser);");
$sentenciaSQL->bindParam(':id',$newidpvd['idpvd']);
$sentenciaSQL->bindParam(':nombre',$_POST['txtnombrepvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':telefono',$_POST['txttelefonopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':correo',$_POST['txtcorreopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':servicios',$_POST['txtserviciospvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':sitio',$_POST['txtsitiopvd'],PDO::PARAM_STR);
$sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
$sentenciaSQL->execute();

include('listar_pvd.php');
?>