<?php

require 'conexao.php';

$cpf = 123;
$nome = "Carol";
$datanascimento = "13/10/1993";
$telefone = 1999970204;
$email = "carolvicente.tec@gmail.com";
$tiposangue = "Tipo O";
$planosaude = "Nenhum";
$alergias = "Nenhum";
$prontuario = "Nenhum";

$query = "Insert into paciente (cpf, nome, datanascimento, telefone, email, tiposangue, planosaude, alergias, prontuario) values ('$cpf', '$nome', '$datanascimento', '$telefone', '$email', '$tiposangue', '$planosaude', '$alergias', '$prontuario')";
$resultado = mysqli_query($conexao,$query);


mysqli_close($conexao);

?>