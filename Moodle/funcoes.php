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
 ?>
