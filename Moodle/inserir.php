<?php
var_dump($_POST);

    if($_POST['id'] ==1){
        
        professor();
    }
    else
    if($_POST['id']==2) {
      
       departamento(); 
    }
    else
    if($_POST['id']==3) {
       
        aluno(); 
     }
    else
     if($_POST['id']==4) {
        disciplina(); 
     }
    else
     if($_POST['id']==5) {
        curso(); 
     }

function departamento(){
    include_once("conexao.php");
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $codigo = filter_input(INPUT_POST, 'código',FILTER_SANITIZE_STRING);
   
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO departamento(código,nome,dnr) VALUES ($codigo,'$nome',$dnr)";
    $resultado = pg_query($conn, $saida);
}

function aluno(){
    include_once("conexao.php");
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nomea',FILTER_SANITIZE_STRING);
    $cod_curso = filter_input(INPUT_POST, 'curso',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO aluno(matrícula,nome,cod_curso) VALUES ($matricula,'$nome',$cod_curso)";
    $resultado = pg_query($conn, $saida);
}

function disciplina(){
    include_once("conexao.php");
    $cod_disciplina = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nomed',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO disciplina(cod_disciplina,nome,dnr) VALUES ($cod_disciplina,'$nome',$dnr)";
    $resultado = pg_query($conn, $saida);
}

function curso(){
    include_once("conexao.php");
    $codigo = filter_input(INPUT_POST, 'código',FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO curso(código,nome,dnr) VALUES ($codigo,$nome,$dnr)";
    $resultado = pg_query($conn, $saida);
}



function professor (){
   
    include_once("conexao.php");
    $nomep = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
    $cpfp = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_STRING);
    
    $depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

    $saida ="INSERT INTO professor(cpf,nome,dnúmero) VALUES ($cpfp,'$nomep',$depp)";
  
    $resultado = pg_query($conn, $saida);

}
 ?>
