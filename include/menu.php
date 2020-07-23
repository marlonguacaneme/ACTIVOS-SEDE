<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">Principal</a></li>

		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">

		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="index2.php"> crear perfiles   </a></li>
			  <li><a href="controlador/desconectar.php"> Cerrar Cesión </a></li>

		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>
