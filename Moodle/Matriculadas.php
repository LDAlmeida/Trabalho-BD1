<?php
include("conexao.php");
function render($usuario){
	$queryMaterias = pg_query($conn,"select cod_disciplinas from aluno where matrícula =" . $usuario);
	<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="static/index.css">
			<meta charset="utf-8">
		<title>Materias</title>
	</head>
	<body>
		<div class="wrapper" action ="index.html">
			<div class="contato">
				<div class="campos">
				</div>
				<div class="materia">
			<input type ="button" onclick=";" value="Materia1">
			<input type ="button" onclick=";" value="Materia2">
			<input type ="button" onclick=";" value="Materia3">
			<input type ="button" onclick=";" value="Materia4">
	</div>
			<div class="mensagem">
					<input type ="button" onclick="window.location='index.html';" value="Voltar">
				</div>
			</div>
		</div>


	</body>

}
?>