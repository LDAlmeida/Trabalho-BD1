<?php
include_once("conexao.php");

function logar(){

$tipoUsuario = filter_input(INPUT_POST,'menu',FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

if ($tipoUsuario == 'Professor') {
    $saida ="select * from professor where idProfessor = " + $usuario;
    try {
        $resultado = pg_query($conn, $saida);
        if ($resultado== TRUE) {
            echo header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
}elseif ($tipoUsuario == 'Aluno') {
        $saida ="select * from professor where idAluno = " + $usuario;
        try {
            $resultado = pg_query($conn, $saida);
            if ($resultado== TRUE) {
                echo header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
} 
?>