<?php

require 'conexao.php';

$cpf = $_POST["cpf_paciente"];
$nome = $_POST["nome_paciente"];
$datanascimento = $_POST["datanascimento_paciente"];
$telefone = $_POST["telefone_paciente"];
$email = $_POST["email_paciente"];
$tiposangue = $_POST["tiposangue_paciente"];
$planosaude = $_POST["planosaude_paciente"];
$alergias = $_POST["alergias_paciente"];
$prontuario = $_POST["prontuario_paciente"];

$query = "SELECT * FROM paciente WHERE cpf = $cpf";
$resultado = mysqli_query($conexao,$query);

if(mysqli_num_rows($resultado) == 0)
{
    echo "CPF ja cadastrado no sistema!";
}
else
{
    $query = "Insert into paciente (cpf, nome, datanascimento, telefone, email, tiposangue, planosaude, alergias, prontuario) values ('$cpf', '$nome', '$datanascimento', '$telefone', '$email', '$tiposangue', '$planosaude', '$alergias', '$prontuario')";
    $resultado = mysqli_query($conexao,$query);
}

mysqli_close($conexao);

?>