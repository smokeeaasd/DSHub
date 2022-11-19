<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<span class="navbar-brand mb-0 h1 text-white" href="#">Olá, <?=$sessao["usuario"]?>.</span>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon btn-close-white"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/home">Página inicial</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/projeto/criar">Novo Projeto</a>
				</li>
			</ul>
		</div>
	</div>
</nav>