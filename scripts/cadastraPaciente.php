<?php

require 'conexao.php';


$cpf = $_POST["cpf_paciente"];
$nome = $_POST["nome_paciente"];
$datanascimento = $_POST["datanascimento_paciente"];
$telefone = $_POST["telefone_paciente"];
$email = $_POST["email_paciente"];
$tiposangue = strtoupper($_POST["tiposangue_paciente"]);
$planosaude = $_POST["planosaude_paciente"];
$alergias = $_POST["alergias_paciente"];
$prontuario = $_POST["prontuario_paciente"];

$achar_pessoa = mysqli_query($conexao, "SELECT cpf FROM paciente where cpf ='".$cpf."'");

$num_linha=mysqli_num_rows($achar_pessoa);
//$usu=mysqli_fetch_array($resultado);
if ($num_linha > 0){
	
	$atualiza = mysqli_query($conexao,"UPDATE paciente SET  nome = '$nome', datanascimento = '$datanascimento', telefone = '$telefone', email = '$email', tiposangue = '$tiposangue', planosaude = '$planosaude', alergias = '$alergias', prontuario = '$prontuario' WHERE cpf = '$cpf'");
	
}
else{
    $query = "Insert into paciente (cpf, nome, datanascimento, telefone, email, tiposangue, planosaude, alergias, prontuario) values ('$cpf', '$nome', '$datanascimento', '$telefone', '$email', '$tiposangue', '$planosaude', '$alergias', '$prontuario')";
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        echo "<br /> Cadastrado com sucesso!<br />";
    }
    else
    {
        echo "<br /> Erro ao Cadastrar! <br />";
    }
}
    mysqli_close($conexao);
?>