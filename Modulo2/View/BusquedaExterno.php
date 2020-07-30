<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="./Css/StyleForm.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Personal Externo</title>
  <meta charset="utf-8">
  <?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../../index.php");
}
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
include 'Header.php';
?>
<body>
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-default"> Busqueda de Equipo de Personal Externo</h1>
<br/>


<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form action="#" method = "POST">

  <div class="form-group">
    <label>Numero de Documento</label>
    <input type="text" class="form-control" id="identificacionE">
      </div>
      <a id="busqueda" class="btn btn-lg btn-success" data-toggle="tab" href="#home">Buscar</a>
  </form>
</body>