<?php
$user = 'root';
$pass = '';
$db = 'sistemamedico';

$conexao = new mysqli('localhost', $user, $pass, $db) or die("Não foi possivel conectar");

$tabela_paciente = "CREATE TABLE paciente  (
	cpf bigint(20) NOT NULL,
	PRIMARY KEY(cpf),
	nome varchar(50) NOT NULL,
	datanascimento varchar(20) NOT NULL,
	telefone int(15)  NOT NULL,
	email varchar(50) NOT NULL,
	tiposangue varchar(20) NOT NULL,
	planosaude varchar(50) NOT NULL,
	alergias text NOT NULL,
	prontuario text NOT NULL)";
	
	
	$tabela_usuario="CREATE TABLE usuario (
	cpf bigint(20) NOT NULL,
	PRIMARY KEY(cpf),
	nome varchar(50) NOT NULL,
	login varchar(20) NOT NULL,
	senha varchar(20) NOT NULL)";
	
	$Criar_usuario= "Insert into usuario (cpf, nome, login, senha) values('31245678911','nome_usuario', 'admin', 'admin')";
	$Inserir = mysqli_query($conexao, $Criar_usuario);
	

$res_paciente = mysqli_query($conexao, $tabela_paciente);
$res_usuario=mysqli_query($conexao, $tabela_usuario);



mysqli_close($conexao);
?>