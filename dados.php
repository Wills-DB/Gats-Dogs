<?php

require_once('conexao.php');

$bancoDados = new db();
$link= $bancoDados->conecta_mysql();

$sql = "SELECT id, usuario, email FROM usuarios";
$resultado = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>Cadastrados</h1>
        <h3></h3>

        <nav class="menu">

            <a href="cadastro.php">Cadastro</a>
            <a href="dados.php">Usuário</a> 

        </nav>
</header>

<br>

<section>
    <h2>Usuarios Cadastrados</h2>

    <?php if (mysqli_num_rows($resultado) > 0) : ?>
        <table class="tabela-usuario">
            <tr class="tabela-cabecalho">
                <th>ID</th>
                <th>Usuarios</th>
                <th>E-mail</th>
                <th>Ações</th>

            </tr>
            
            <?php while($linha = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?php echo  $linha ['id']; ?></td>
                    <td><?php echo  $linha ['usuario']; ?></td>
                    <td><?php echo  $linha ['email']; ?></td>
 
                    
                    <td>
                        <a class="botão-acao editar" href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a>
                        <a class="botão-acao excluir" href="excluir.php?id=<?php echo $linha['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este usuario?');">Excluir</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <?php else :?>
                <p>Nenhum usuario cadastrado.</p>
            <?php  endif; ?>
            
            <a href="principal.php" class="botao-voltar"> Voltar</a>

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

<footer>

<h3>Informações Confidenciais</h3>

</footer>

</body>
</html>