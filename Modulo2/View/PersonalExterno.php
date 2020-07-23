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
  
<h1 class="text-center text-default"> Equipo de Personal Externo</h1>
<br/>


<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form action="#" method = "POST">

  <div class="form-group">
    <label>Numero de Documento</label>
    <input type="text" class="form-control" readonly="readonly" id="identificacionE">
  </div>
  
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" readonly="readonly" id="nombreE">
  </div>

  <div class="form-group">
    <label>Empresa</label>
    <input type="text" class="form-control" readonly="readonly" id="empresaE">
  </div>

  <div class="form-group">
    <label>Marca</label>
    <input type="text" class="form-control" readonly="readonly" id="marcaE">
  </div>

  <div class="form-group">
    <label>Modelo</label>
    <input type="text" class="form-control" readonly="readonly" id="modeloE">
</div>
  
    
<div class="form-group">
<label>Observaciones</label>
<select name="observacion" class="form-control input-lg" placeholder="Selecione una opcion">    
    <option value="1" >opcion 1</option>
    <option value="2" >opcion 2</option>
    <option value="3" >opcion 3</option>
    <option value="4" >opcion 4</option>
</select>  
<br><br>
  </div>
 
   

</form>
    </div>

   <!-- Botones de ingreso y salida -->
<div class="col-sm-12">

<ul class="nav nav-pills" >
  <li class="" style="width:50%"><a id="ingreso" class="btn btn-lg btn-success" data-toggle="tab" href="#home">Ingeso</a></li>
 
  <li class=" " style="width:48%"><a  id="ingreso" class=" btn btn-lg btn-danger" data-toggle="tab" href="#menu1">Salida</a></li>
</ul>
    </div>
   </div>
  </div>
</div>
</div>

</body>
</html>