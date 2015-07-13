<?php 
	if ( $_COOKIE['login'] == '') {
		echo '<script>';
		echo 'alert("Você precisa o login corretamente para acessar esta página");';
		echo 'location="index.php"';
		echo '</script>';
	}

	date_default_timezone_set("Brazil/East");
	echo date('H');

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Pagina Secreta</h1>
	bom dia <?php echo $_COOKIE['login']; ?>

	<a href="logoff.php">Sair</a>
	
</body>
</html>






