<?php 
include_once("conexao.php");
//pegar os dados do formulario
$nome=$_POST['nome'];
$email = $_POST['email'];

//comando parab inserir alunos no banco
$sql = "INSERT INTO alunos (nome,email) VALUES ('$nome', '$email')";

if(mysqli_query($conn,$sql)){
    header("Location: lista.php");
        // echo "<h1>Alunos cadastrado com sucesso!</h1>";
        // echo "<a href='index.html'>Voltar</a>";
        }else{
            echo "Erro ao cadastrar";
}
?>