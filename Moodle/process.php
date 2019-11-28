<?php
include_once("conexao.php");

function professor{
    $nomep = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
    $cpfp = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
    $depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO professor(cpfp,nomep,depp) VALUES ($cpf,$nome,$dnúmero)";
}

function departamento{
    $codigo = filter_input(INPUT_POST, 'código',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO departamento(código,nome,dnr) VALUES ($codigo,$nome,$dnr)";
}

function aluno{
    $matricula = filter_input(INPUT_POST, 'matrícula',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $cod_curso = filter_input(INPUT_POST, 'cod_curso',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO aluno(matrícula,nome,cod_curso) VALUES ($matricula,$nome,$cod_curso)";
}

function disciplina{
    $cod_disciplina = filter_input(INPUT_POST, 'cod_disciplina',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO disciplina(cod_disciplina,nome,dnr) VALUES ($cod_disciplina,$nome,$dnr)";
}

function curso{
    $codigo = filter_input(INPUT_POST, 'código',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO curso(código,nome,dnr) VALUES ($codigo,$nome,$dnr)";
}

function
 ?>
