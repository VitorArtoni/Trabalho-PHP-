<?php

require 'conexao.php';

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome']: '';
$datanascimento = isset($_POST['datanascimento']) ? $_POST['datanascimento']:'';
$telefone = isset($_POST['telefone']) ? $_POST['telefone']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$tiposangue = isset($_POST['tiposangue']) ? $_POST['tiposangue']: '';
$planosaude = isset($_POST['planosaude']) ? $_POST['planosaude']: '';
$alergias = isset($_POST['alergias']) ? $_POST['alergias']: '';
$prontuario = isset($_POST['prontuario']) ? $_POST['prontuario']: '';


$query = "UPDATE paciente SET  nome = '$nome', datanascimento = '$datanascimento', telefone = '$telefone', email = '$email', tiposangue = '$tiposangue', planosaude = '$planosaude', alergias = '$alergias', prontuario = '$prontuario' WHERE cpf = '$cpf'";
$resultado = mysqli_query($conexao,$query);


mysqli_close($conexao);
header("Location: ../Sistema/menuprincipal.php"); /* Redirect browser */
exit();

?>