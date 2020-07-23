<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto academias</title>
</head>
<body background=" " style="background-attachment: fixed" >
<!-- imagen fondo -->
<?php
require("include/menu.php");
 ?>

<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre completo </b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa nombre completo " />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu usuario </b></label>
      <input type="text" name="nick" class="form-control" placeholder="Ingresa nombre usuario " />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control" required placeholder="Ingresa contraseña" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    </div>

    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("logica/registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>


</body>
</html>
