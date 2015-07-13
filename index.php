<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="text" placeholder="Email">
		<input name="senha" type="password" placeholder="Senha">
		<input name="enviar" type="submit" value="Entrar">
	</form>

	<h2>Inscreva-se</h2>
	<form action="inscricao.php" method="post">
		<input name="nome" type="text" placeholder="Nome">
		<input name="email" type="email" placeholder="Email">
		<input name="senha1" type="password" placeholder="Escolha sua senha">
		<input name="senha2" type="password" placeholder="Repita sua senha">
		<input name="enviar" type="submit" value="Confirmar inscrição">
	</form>

</body>
</html>