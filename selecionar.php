<?php
var_dump($_POST);

    if($_POST['id'] ==1){
        professor();
    }
    else
    if($_POST['id']==2) {
        aluno(); 
     }
    else
     if($_POST['id']==3) {
        disciplina(); 
     }

function professor(){

    $saida ="SELECT * FROM professor";
    $resultado = pg_query($conn, $saida);
}

function aluno(){
    include_once("conexao.php");

    $saida ="SELECT * FROM aluno";
    $resultado = pg_query($conn, $saida);
}

function disciplina(){
    include_once("conexao.php");

    $saida ="SELECT * FROM disciplina";
    $resultado = pg_query($conn, $saida);
}

 ?>
