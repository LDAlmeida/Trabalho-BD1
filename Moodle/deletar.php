<?php
include_once("conexao.php");

function professor(){
    $cpfp = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
    $depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

    $saida ="DELETE FROM professor WHERE cpfp = $codigo";
}

function aluno(){
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $cod_curso = filter_input(INPUT_POST, 'cod_curso',FILTER_SANITIZE_STRING);
    $cod_disciplina = filter_input(INPUT_POST, 'cod_disciplina',FILTER_SANITIZE_STRING);

    $saida ="DELETE FROM aluno WHERE cpfp = $matricula";
}

function disciplina(){
    $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

    $saida ="DELETE FROM disciplina WHERE cod_disciplina = $codigo";
}

