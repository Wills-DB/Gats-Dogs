<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

<?php

require_once('conexao.php');

$usuario=$_POST['usuario'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$cep=$_POST['cep'];
$nascimento=$_POST['nascimento'];

$bancoDados=new db();
$link=$bancoDados->conecta_mysql();

$sql="insert into usuarios (usuario, email, telefone, cidade, estado, cep, nascimento) values ('$usuario','$email','$telefone','$cidade','$estado' ,'$cep','$nascimento')";

mysqli_query($link,$sql);

?>

<br>

<section>
    <h2>CADASTRO</h2>
    <br>
<p> Cadastro realizado com sucesso!</p>
<br>
<a href="principal.php">Voltar</a>

</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<footer>

<h3>Infromações Confidenciais</h3>

</footer>

</body>
</html>