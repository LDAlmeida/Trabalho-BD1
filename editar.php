<?php


    if(isset($_POST["professor"])){
        
        professor();
    }
    elseif(isset($_POST["aluno"])) {
        aluno(); 
    }
    elseif(isset($_POST["disciplina"])) {
        disciplina(); 
    }

function professor(){
    include_once("conexao.php");
    $cpfp = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
    $nomep = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
    $depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

    $saida ="UPDATE professor SET nome = $nome, dnúmero = $depp WHERE cpf = $cpfp";
}

function aluno(){
    include_once("conexao.php");
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $cod_curso = filter_input(INPUT_POST, 'cod_curso',FILTER_SANITIZE_STRING);
    $cod_disciplina = filter_input(INPUT_POST, 'cod_disciplina',FILTER_SANITIZE_STRING);

    $saida ="UPDATE aluno SET nome = $nome, cod_curso = $cod_curso, cod_disciplina =  $cod_disciplina WHERE matricula = $matricula";
}

function disciplina(){
    include_once("conexao.php");
    $cod_disciplina = filter_input(INPUT_POST, 'cod_disciplina',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="UPDATE disciplina SET nome = $nome, dnr = $dnr WHERE cod_disciplina = $cod_disciplina";
}

?>