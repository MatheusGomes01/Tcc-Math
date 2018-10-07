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
						<a class="dropdown-item" href="#">Povo Brasileiro</a>
						<a class="dropdown-item" href="graficos.php">Gráficos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item active" href="observacoes.php">Observações</a>
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

	<div class="row alert alert-primary" id="idobservacoes">
		<div class="col-12">
			<center>
				<b>Observações</b>
			</center>
		</div>
	</div>

	<div id="divobservacoes">
		<p class="p">
			<i>
				A taxa de crescimento de atendimento escolar vem crescendo anualmente em uma média de 2,7 à 3,0%, e ao longo do últimos anos o minitério público da educação vem construindo uma política sistêmatica contra o analfabetismo. 
			</i>
		</p>
		<p>
			<i>
				Existe um programa chamado de "Brasil Afalbetizado", que foi desenvolvido através do consenço entre o governo federal, colaboração de estados, o Distrito Federal e municípios. O programa garante recursos suplementares para alfabetizadores, como: aquisição e produção de material pedagógico; alimentação escolar e transporte dos alfabetizandos.
			</i>
		</p>
		<p>
			<i>
				Ainda de acordo com pesquisas do IBGE que apontam que entre o ano de 2001 a 2014 a taxa de analfabetizados aumentou em 4,3% .
			</i>
		</p>
	</div>


	<script type="text/javascript">
		$("#divobservacoes").hide();
		
		$("#idobservacoes" ).click(() => {
			$( "#divobservacoes" ).toggle( "slow", function() {
    		// Animation Motivo por não irem a escola.
			});
		});

	</script>
	<!--https://docs.microsoft.com/pt-br/sql/linux/quickstart-install-connect-ubuntu?view=sql-server-2017-->
</body>
</html>