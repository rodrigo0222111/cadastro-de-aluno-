<?php
$servidor = "localhost";
$usuario = "root";
$senha ="";
$banco = "senai";
//criando a conexao
$conn= mysqli_connect($servidor, $usuario, $senha, $banco);

//testando para ver se deu certo
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>


