<?php 
	extract($_POST);

	require('conexao.php');

	$sql = "select * from tbl_login where email = '$email'";

	$query = mysqli_query($conexao, $sql);

	while( $rs = mysqli_fetch_array($query) ){
		
		$db_nome = $rs['nome'];
		$db_senha = $rs['senha'];

		if(md5($senha) == $db_senha){
			setcookie('login',$db_nome);
			
			echo '<script>';
			echo '	location="pagina-secreta.php"';
			echo '</script>';
		}
	}

	echo '<script>';
	echo 'alert("Login ou Senha Incorreta");';
	echo 'location="index.php"';
	echo '</script>';













 
	//echo 'Seu email é: '.$email.' <br> e sua senha é: '.md5($senha);
	// if( $email == 'vitor@gmail.com' && $senha == '123' ){

	// 	setcookie('login','vitor');
		

	// 	echo '<script>';
	// 	echo '	location="pagina-secreta.php"';
	// 	echo '</script>';
	
	// }else{
	// 	echo '<script>';
	// 	echo 'alert("Login ou Senha Incorreta");';
	// 	echo 'location="index.php"';
	// 	echo '</script>';
	// }

 ?>
