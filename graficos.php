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
						<a class="dropdown-item" href="pvBrasileiro.php">Povo Brasileiro</a>
						<a class="dropdown-item active" href="#">Gráficos</a>
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

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col" id="Total">Total</th>
				<th scope="col" id="Idosos">Idosos</th>
				<th scope="col" id="Adultos">Adultos</th>
				<th scope="col" id="Criancas">Crianças</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<div class="btn-group-vertical" role="group" id="tbTotal">
						<button type="button" class="btn btn-light">100%</button>
						<button type="button" class="btn btn-light">90%</button>
						<button type="button" class="btn btn-light">80%</button>
						<button type="button" class="btn btn-light">70%</button>
						<button type="button" class="btn btn-light">60%</button>
						<button type="button" class="btn btn-light">50%</button>
						<button type="button" class="btn btn-light">40%</button>
						<button type="button" class="btn btn-light">30%</button>
						<button type="button" class="btn btn-light">20%</button>
						<button type="button" class="btn btn-primary">10%</button>
						<button type="button" class="btn btn-primary">0%</button>
					</div>
				</td>
				<td>
					<div class="btn-group-vertical" role="group" id="tbIdosos">
						<button type="button" class="btn btn-light">100%</button>
						<button type="button" class="btn btn-light">90%</button>
						<button type="button" class="btn btn-light">80%</button>
						<button type="button" class="btn btn-light">70%</button>
						<button type="button" class="btn btn-success">60%</button>
						<button type="button" class="btn btn-success">50%</button>
						<button type="button" class="btn btn-success">40%</button>
						<button type="button" class="btn btn-success">30%</button>
						<button type="button" class="btn btn-primary">20%</button>
						<button type="button" class="btn btn-primary">10%</button>
						<button type="button" class="btn btn-primary">0%</button>
					</div>
				</td>
				<td>
					<div class="btn-group-vertical" role="group" id="tbAdultos">
						<button type="button" class="btn btn-light">100%</button>
						<button type="button" class="btn btn-light">90%</button>
						<button type="button" class="btn btn-light">80%</button>
						<button type="button" class="btn btn-light">70%</button>
						<button type="button" class="btn btn-light">60%</button>
						<button type="button" class="btn btn-light">50%</button>
						<button type="button" class="btn btn-light">40%</button>
						<button type="button" class="btn btn-success">30%</button>
						<button type="button" class="btn btn-primary">20%</button>
						<button type="button" class="btn btn-primary">10%</button>
						<button type="button" class="btn btn-primary">0%</button>
					</div>
				</td>
				<td>
					<div class="btn-group-vertical" role="group" id="tbCriancas">
						<button type="button" class="btn btn-light">100%</button>
						<button type="button" class="btn btn-light">90%</button>
						<button type="button" class="btn btn-light">80%</button>
						<button type="button" class="btn btn-light">70%</button>
						<button type="button" class="btn btn-light">60%</button>
						<button type="button" class="btn btn-light">50%</button>
						<button type="button" class="btn btn-light">40%</button>
						<button type="button" class="btn btn-light">30%</button>
						<button type="button" class="btn btn-light">20%</button>
						<button type="button" class="btn btn-primary">10%</button>
						<button type="button" class="btn btn-primary">0%</button>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<br>

	<div class="alert alert-info" id="colDesc">
		<center>
			<div>Descrição</div>
		</center>
	</div>
	<div class="row" id="rowDesc">
		<div class="modal" tabindex="-1" role="dialog" id="modalDescR">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Descrição de Analfabetismo</h5>
						<button type="button" class="close" id="closeR" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>O nível razoavél é entre 1% e 20% da população brasileira, os 20% atingem um  média de poucos mais de 23 milhões de pessoas, fica entre a faixa de 23 a 25 milhões algo que sim é desgradavél ao país mas ainda há o que se fazer para mudar.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="modalDescM">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Descrição de Analfabetismo</h5>
						<button type="button" class="close" id="closeM" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>O nível mediano esta entre 21% a 60% da população brasileira, os 60% atingem um  média 70 milhões de pessoas, fica entre a faixa de 69 a 71 milhões de analfabetos (se fossem até 60%), algo que sim é desgradavél ao país, deixando quase impossível de o que se fazer para melhorar o conhecimento de ler e escever do analfabetos.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="modalDescC">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Descrição de Analfabetismo</h5>
						<button type="button" class="close" id="closeC" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>O nível critíco é qualquer porcentagem a cima de 60% da população brasileira, essa porcentagem varia de 72 milhões de pessoas a toda a população, o que novamente torna quase impossível a possibilidade de alfabetizar uma populalção inteira.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-2">
			<button class="btn btn-primary" id="Razoavel">Razoavel</button>
		</div>
		<div class="col-2">
			<button class="btn btn-success" id="Mediano">Mediano</button>
		</div>
		<div class="col-2">
			<button class="btn btn-danger" id="Critico">Critico</button>
		</div>
	</div>

	<script type="text/javascript">
		$("#tbTotal").hide()
		$("#tbIdosos").hide()
		$("#tbAdultos").hide()
		$("#tbCriancas").hide()
		$("#rowDesc").hide()
		$("#modalDescR").hide()
		$("#modalDescM").hide()
		$("#modalDescC").hide()

		$("#Total" ).click(() => {
			$( "#tbTotal" ).toggle( "slow", () => {
    			// Animation Grafico Total.
    		});
		});

		$("#Idosos" ).click(() => {
			$( "#tbIdosos" ).toggle( "slow", () => {
    			// |Animation Grafico Idosos.
    		});
		});

		$("#Adultos" ).click(() => {
			$( "#tbAdultos" ).toggle( "slow", () => {
    			// |Animation Grafico Adultos.
    		});
		});

		$("#Criancas" ).click(() => {
			$( "#tbCriancas" ).toggle( "slow", () => {
    			// |Animation Grafico Criancas.
    		});
		});

		$("#colDesc").click(()=>{
			$( "#rowDesc" ).toggle( "slow", () => {
			});
		})

		$("#Razoavel").click(()=>{
			$( "#modalDescR" ).toggle( "slow", () => {
			});
		})

		$("#Mediano").click(()=>{
			$( "#modalDescM" ).toggle( "slow", () => {
			});
		})

		$("#Critico").click(()=>{
			$( "#modalDescC" ).toggle( "slow", () => {
			});
		})

		$("#closeR").click(()=>{
			$( "#modalDescR" ).hide("slow", () => {
			});
		});

		$("#closeM").click(() => {
			 $( "#modalDescM" ).hide("slow", () => {
			});
		})

		$("#closeC").click(() => {
			 $( "#modalDescC" ).hide("slow", () => {
			});
		})

	</script>
</body>
</html>