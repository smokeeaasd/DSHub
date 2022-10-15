<?php

$sessao = ((array)$_SESSION['usuario_logado']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicial</title>
	<link href="./../../../View/css/Home.css" rel="stylesheet">

	<?php include_once VIEWS . "../includes/css_config.php"; ?>
	<link rel="stylesheet" type="text/css" href="./../../../View/css/Home.css" />
</head>


<body>
	<main class="container-fluid">
		<div class="row row-cols-auto">
			<?php foreach ($model->rows as $row) : ?>
				<div class="col">
					<div class="card repository" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title"><?= $row->usuario ?>/<?= $row->titulo ?></h5>
							<h6 class="card-subtitle mb-2 text-muted">.<?= $row->linguagem ?></h6>
							<p class="card-text"><?= $row->descricao ?></p>
							<a href="#" class="card-link">Ver código</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</main>

	<?php include_once VIEWS . "../includes/js_config.php" ?>
</body>

</html>