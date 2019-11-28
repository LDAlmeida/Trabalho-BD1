<?php
include_once("conexao.php");

function professor{
$nomep = filter_input(INPUT_POST, 'nomep',FILTER_SANITIZE_STRING);
$cpfp = filter_input(INPUT_POST, 'cpfp',FILTER_SANITIZE_EMAIL);
$depp = filter_input(INPUT_POST, 'depp',FILTER_SANITIZE_STRING);

$saida ="INSERT INTO professor(nomep,cpfp,depp) VALUES ($nomep,$cpfp,$depp)";
}
function aluno{
    $nomea = filter_input(INPUT_POST, 'nomea',FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula',FILTER_SANITIZE_EMAIL);
    $curso = filter_input(INPUT_POST, 'curso',FILTER_SANITIZE_STRING);
    $saida ="INSERT INTO BD(nomea,matricula,curso) VALUES ($nomea,$matricula,$curso)";
    $resultado = mysqli_query($conn, $saida);
    }

function disciplina{
    $nomed = filter_input(INPUT_POST, 'nomed',FILTER_SANITIZE_STRING);
    $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_EMAIL);
    $depd = filter_input(INPUT_POST, 'depd',FILTER_SANITIZE_STRING);
    $saida ="INSERT INTO BD(nomep,cpfp,depp) VALUES ($nomed,$codigo,$depd)";
    $resultado = mysqli_query($conn, $saida);
        }

function curso{
    $nomec = filter_input(INPUT_POST, 'nomec',FILTER_SANITIZE_STRING);
    $codc = filter_input(INPUT_POST, 'codc',FILTER_SANITIZE_EMAIL);
    $depc = filter_input(INPUT_POST, 'depc',FILTER_SANITIZE_STRING);
    $saida ="INSERT INTO BD(nomec,codc,depc) VALUES ($nomec,$codc,$depc)";
    $resultado = mysqli_query($conn, $saida);
                }


 ?>
