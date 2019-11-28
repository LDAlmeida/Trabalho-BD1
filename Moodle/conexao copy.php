<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "mysql";

$conexao = new mysqli($servidor,$usuario,$senha,$dbname);

if (mysqli_connect_errno())
  {
  echo "erro ao conectar no MySQL: " . mysqli_connect_error();
  }

// Perform queries
$query = mysqli_query($conexao,"SELECT * FROM user");
while ($row = mysqli_fetch_assoc($query)) {
    echo $row['User'] . '<br>';
}

mysqli_close($conexao);


?>
