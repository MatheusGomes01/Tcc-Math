<?
include 'bootstrap.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Estastísticas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item active" href="#">Povo Brasileiro</a>
						<a class="dropdown-item" href="graficos.php">Gráficos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="observacoes.php">Observações</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<br>

	<div class="row alert alert-primary" id="pvBrasileiro">
		<div class="col-12">
			<center>
				<label>
					<b>O Brasil</b>

				</label>
			</center>
		</div>
	</div>
	<div id="obsPvBrasileiro">
		<p class="p">
			<i>
				Nosso país tem cerca de 11,8 milhões de analfabetos, o que é equivalente a 7,2% da população entre 15 anos ou mais. Os ultimos dados divulgados pelo IBGE fazem parte de uma 
				pesquisa nacional por amostras de domicílios continuos e se referem ao ano de 2016.
			</i>
		</p>
		<p>
			<i>
				Média de 25 milhões de jovens entre 15 e 29 anos não frequentam a escola. A principal causa devido a este afastamento é referente a trabalho, dizem 41% dos jovens. A segunda maior causa é devido a atratividade. De acordo com o IBGE 19,7% das pessoas não tem interrese no sistema educacional (2016).
			</i>
		</p>
	</div>

	<br><br>

	<div class="alert alert-primary" id="estastisticasRazoes">
		<div class="col-12">
			<center>
				<label>
					<b>Motivo por não irem a escola</b>
				</label>
			</center>
		</div>
	</div>

	<div id="imgEstastisticasRazoes">
		<p>
			<i>
				Outros motivos como afazeres domésticos foram mencionados por 12,8% da população dentre os entrevistados, e o fato de os mesmos ja terem atingido o nível de estudos desejados é apontado por 8%. Cerca de 7,8% disse ainda que não haviam um rendimento financeiro para que pudesse continuar seus estudos e 2,6% afirmam não ter escolas ou faculdades perto de sua região.
			</i>
		</p>
		<div class="row">
			<div class="col-12">
				<center>
					<img src="imagens/sexoMasculino.png" width="800" height="1200">
				</center>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="javascript.js"></script>
</body>
</html>