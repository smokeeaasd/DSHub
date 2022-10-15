<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<?php include_once VIEWS . "../includes/css_config.php"; ?>

	<link href="./../../../View/css/FormLogin.css" rel="stylesheet">
</head>

<body>
	<main class="container-fluid">

		<div class="formulario">
			<div class="titulo">
				<h1>source code</h1>
				<h2>Entrar</h2>
			</div>

			<form action="/login/auth" method="POST" class="form-controle p-3 w-100">

				<label>Email</label>
				<input name="email" autocomplete="none" />

				<br />

				<label>Senha</label>
				<input name="senha" type="password" />

				<br />

				<button>Entrar</button>

			</form>

			<?php if (isset($_GET["erro"])) : ?>
				<p class="login-error">Usuário ou senha incorretos</p>
			<?php endif; ?>

		</div>
	</main>

	<?php include_once VIEWS . "../includes/js_config.php" ?>
</body>

</html>