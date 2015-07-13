<?php 
	extract($_POST);

	if( $senha1 == $senha2 ){

		require('conexao.php');

		$senha = md5($senha1);

		$sql = "insert into tbl_login values('$email', '$nome', '$senha')";
		
		mysqli_query($conexao, $sql) or die('Erro ao gravar dados.');

		echo 'Dados cadastrados com sucesso.';
		

	}else{
		echo '<script>';
		echo 'alert("As senhas digitadas estão diferentes, tente novamente");';
		echo 'location="index.php"';
		echo '</script>';
	}

 ?>