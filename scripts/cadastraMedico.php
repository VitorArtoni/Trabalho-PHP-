<?php

require 'conexao.php';

$cpf = $_POST["cpf_medico"];
$nome = $_POST["nome_medico"];
$login = $_POST["usuario_medico"];
$senha = $_POST["senha_medico"];


    $query = "Insert into usuario (cpf, nome, login, senha) values('$cpf', '$nome', '$login', '$senha')";
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        echo "<br /> Cadastrado com sucesso!<br />";
    }
    else
    {
        echo "<br /> Erro ao Cadastrar! <br />";
    }


mysqli_close($conexao);

?>