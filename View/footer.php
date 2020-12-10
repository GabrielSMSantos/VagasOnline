<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
	}

	a {
		text-decoration: none;
		color: #000
	}

	ul {
		list-style: none;
	}
		
	footer {
		margin-top: 1rem;
		position: relative;
		width: 100%;
		background-color: rgba(35, 114, 199, 0.8);
		color: #fff;
	}

	#headFooter {
		padding-bottom: 1rem;
	}

	.title {
		background: #175fac;
		padding: 1rem;
	}

	.contentFooter {
		display: flex;
		padding: 1rem;
	}

	.candidatos {
		margin-right: 1rem;
	}
	
	.contentTitle {
		margin-bottom: 0.4rem;
	}

	.contentList li {
		margin-bottom: 0.2rem;
	}

	#dvCopy {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 35px;
		padding-left: 15px;
		background-color: rgba(35, 114, 199, 1);
	}
</style>

<footer>
	<div id="headFooter">
		<div class="title">
			<h2>Vagas Online</h2>
		</div>

		<div class="contentFooter">
			<div class="candidatos">
				<h3 class="contentTitle">Para candidatos</h3>

				<ul class="contentList">
					<li><a href="#">Buscar vagas</a></li>
					<li><a href="#">Por área</a></li>
					<li><a href="#">Por cidade</a></li>
					<li><a href="#">Currículo</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>

			<div class="empresas">
				<h3 class="contentTitle">Para Empresas</h3>

				<ul class="contentList">
					<li><a href="#">Cadastrar vagas</a></li>
					<li><a href="#">Visualizar vagas</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="dvCopy">
		<p id="copy">© <?= date("Y"); ?> Copyright Todos direitos reservados.</p>
	</div>
</footer>