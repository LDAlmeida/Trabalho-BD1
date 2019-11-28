<?php
$servidor = "educatorrdb.ccqy8084hset.sa-east-1.rds.amazonaws.com";
$usuario = "postgres";
$senha = "postgres";
$dbname = "postgres";


$conn = pg_connect($servidor,$usuario,$senha,$dbname);


?>
