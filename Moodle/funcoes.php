<?php


    if(isset($_POST["professor"])){
       
        professor();
}






function professor (){
    include_once("conexao.php");
$cpfp = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
$nomep = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
$depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

$saida ="INSERT INTO professor(cpf,nome,dnúmero) VALUES ($cpfp,'$nomep',$depp)";

$resultado = pg_query($conn, $saida);

}

function inserirAluno (){
    include_once("conexao.php");
    $nomea = filter_input(INPUT_POST, 'nomea',FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_STRING);
    $curso = filter_input(INPUT_POST, 'curso',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO aluno(matrícula,nome,cod_curso) VALUES ($matricula,'$nomea',$curso)";

    $resultado = pg_query($conn, $saida);
}

function inserirNota (){
    include_once("conexao.php");
    $nomea = filter_input(INPUT_POST, 'nomea',FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_STRING);
    $curso = filter_input(INPUT_POST, 'curso',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO aluno(matrícula,nome,cod_curso) VALUES ($matricula,'$nomea',$curso)";

    $resultado = pg_query($conn, $saida);
}



 ?>
