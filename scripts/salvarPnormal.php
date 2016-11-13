<?php

require 'conexao.php';

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$prontuario = isset($_POST['prontuario']) ? $_POST['prontuario']: '';


$query = "UPDATE paciente SET prontuario = '$prontuario' WHERE cpf = '$cpf'";
$resultado = mysqli_query($conexao,$query);
mysqli_close($conexao);
header("Location: ../Sistema/menuprincipalNormal.php"); /* Redirect browser */
exit();

?>