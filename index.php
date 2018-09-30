<?
include 'bootstrap.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tcc</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Estastísticas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="pvBrasileiro.php">Povo Brasileiro</a>
						<a class="dropdown-item" href="graficos.php">Gráficos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Observações</a>
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

	<div class="row alert alert-dark" id="infoAnalfabestismo">
		<div class="col-12">
			<center>
				Tabela de informações sobre o analfabetismo
			</center>
		</div>
	</div>

	<div id="tb_infoAnalfabestismo">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Idade</th>
					<th scope="col">Formação</th>
					<th scope="col">Analfabeto</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Roberto</td>
					<td>36</td>
					<td>Engenheiro Eletrico</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Larissa</td>
					<td>25</td>
					<td>Advogada</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Zé</td>
					<td>64</td>
					<td>Vendedor</td>
					<td>Sim</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Luiz</td>
					<td>68</td>
					<td>Aposentado</td>
					<td>Sim</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>Marcia</td>
					<td>87</td>
					<td>Aposentada</td>
					<td>Sim</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td>Rosa</td>
					<td>65</td>
					<td>Aposentada</td>
					<td>Sim</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>Carlos</td>
					<td>19</td>
					<td>Estudante</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td>Raphaela</td>
					<td>44</td>
					<td>Vendedora</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td>Eduarda</td>
					<td>29</td>
					<td>Cabeleleira</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td>Carla</td>
					<td>22</td>
					<td>Estudante</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">11</th>
					<td>Laune</td>
					<td>25</td>
					<td>Enfermeira</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">12</th>
					<td>Luiza</td>
					<td>30</td>
					<td>Empresaria</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">13</th>
					<td>Gustavo</td>
					<td>28</td>
					<td>Repositor</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">14</th>
					<td>Marcos</td>
					<td>37</td>
					<td>Vendedor</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">15</th>
					<td>Pedro</td>
					<td>25</td>
					<td>Analista</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">16</th>
					<td>Diego</td>
					<td>30</td>
					<td>Programador</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">17</th>
					<td>Maria</td>
					<td>28</td>
					<td>RH</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">18</th>
					<td>Murilo</td>
					<td>23</td>
					<td>Estudante</td>
					<td>Não</td>
				</tr>
				<tr>
					<th scope="row">19</th>
					<td>Maria</td>
					<td>88</td>
					<td>Aposentada</td>
					<td>Sim</td>
				</tr>
				<tr>
					<th scope="row">20</th>
					<td>Maurilio</td>
					<td>75</td>
					<td>Aposentado</td>
					<td>Sim</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script type="text/javascript" src="javascript.js"></script>
</body>
</html>