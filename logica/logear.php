<?php
require 'conexion.php';
session_start();

$usuario =$_POST['usuario'];
$clave =$_POST['clave'];

$consulta = "SELECT COUNT(*) as contar FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$query =mysqli_query($conexion, $consulta);
$array =mysqli_fetch_array($query);

if ($array['contar']>0) {
  $_SESSION['username']=$usuario;

header("location: ../paginaprincipal.php");
}else {

echo '<script language="javascript">alert("contraseña incorrecta");</script>';// validar

  //header("location: ../index.php ");
}
?>
