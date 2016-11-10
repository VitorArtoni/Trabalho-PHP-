<?php

require 'conexao.php';

$cpf = 123;
$nome = "Carol";
$login = "carol";
$senha = "repolho12";


$query = "Insert into usuario (cpf, nome, login, senha) values ('$cpf', '$nome', '$login', '$senha')";
$resultado = mysqli_query($conexao,$query);


mysqli_close($conexao);

?>