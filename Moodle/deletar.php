<?php
include_once("conexao.php");

function professor(){
$nomep = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
$cpfp = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_EMAIL);
$depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

$saida ="INSERT INTO professor(cpfp,nomep,depp) VALUES ($cpf,$nome,$dnúmero)";
}

 ?>
