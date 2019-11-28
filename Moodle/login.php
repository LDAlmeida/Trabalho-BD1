<?php
include_once("conexao.php");

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
  
$tipoUsuario = filter_input(INPUT_POST,'menu',FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

console_log([$tipoUsuario,$usuario,$senha]);

if ($tipoUsuario == 'Professor') {
    $saida ='select "idProfessor",senha from login where "idProfessor" = ' . $usuario . ' and senha=' . "'".$senha."'";
    try {
        $resultado = pg_query($conn, $saida);
        console_log($resultado);
        if (pg_affected_rows($resultado) == 1) {
            header('Location: Notas.html');
        }else{
            header('Location: login.html');
        }
    } catch (\Throwable $th) {
        throw $th;
    }
}elseif ($tipoUsuario == 'Aluno') {
        $saida ='select "idAluno",senha from login where "idAluno" = ' . $usuario . ' and senha=' . "'".$senha."'";
        try {
            $resultado = pg_query($conn, $saida);
            console_log($resultado);
            if (pg_affected_rows($resultado) == 1) {
                header('Location: Matriculadas.html');
            }else{
                header('Location: login.html');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

?>