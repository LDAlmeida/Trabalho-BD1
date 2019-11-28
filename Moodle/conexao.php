<?php
$servidor = "educatorrdb.ccqy8084hset.sa-east-1.rds.amazonaws.com";
$usuario = "postgres";
$senha = "postgres";
$dbname = "postgres";

$conexao ="host=educatorrdb.ccqy8084hset.sa-east-1.rds.amazonaws.com port=5432 dbname=postgres user=postgres password=postgres"; 
$conn =  pg_connect($conexao);


?>
