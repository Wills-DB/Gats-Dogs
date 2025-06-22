<?php
    require_once('conexao.php');

    $bancoDados = new db();
    $link = $bancoDados->conecta_mysql();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($link, $sql);

    if (mysqli_num_rows ($resultado) == 1) {
        $dados = mysqli_fetch_assoc($resultado);

    } else {
    echo "Usuário não encontrado.";
exit;
    }

} else {
    echo "ID não informado.";
    exit;
}

if ($_SERVER[ 'REQUEST_METHOD' ] === 'POST') {
    $novoUsuario = $_POST[ 'usuario'];
    $novoEmail = $_POST['email'];
    $novoTelefone = $_POST[ 'telefone'];
    $novoEndereco = $_POST['endereco'];
    $novoCidade = $_POST[ 'cidade'];
    $novoEstado = $_POST['estado'];
    $novoCep = $_POST['cep'];
    $novoNascimento = $_POST['nascimento'];


    $sqlUpdate = "UPDATE usuarios SET

            usuario = '$novoUsuario',
            email = '$novoEmail',
            telefone = '$novoTelefone',
            endereco = '$novoEndereco',
            cidade = '$novoCidade',
            estado = '$novoEstado',
            cep = '$novoCep',
            nascimento = '$novoNascimento'
        WHERE id = $id";

    if (mysqli_query ($link, $sqlUpdate)) {
    header ("Location: dados.php");
    exit;
    } else {
        echo "Erro ao atualizar.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Editar Usuario</h1>
    </header>

<section>

    <form method="post" action="">

    <label for="usuario">Usuário</label>
    <input type="text" id="usuario" name="usuario" class="campos" values="<?php echo $dados['usuario']; ?>" required>
    
    <br><br>
    
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" class="campos" values="<?php echo $dados['email']; ?>" required>
    
    <br><br>
    
    <label for="telefone">telefone</label><br>
    <input type="text" id="telefone" name="telefone" class="campos" values="<?php echo $dados['telefone']; ?>" required>
    
    <br><br>

    <label for="endereco">Endereço</label><br>
    <input type="text" id="endereco" name="endereco" class="campos" values="<?php echo $dados['endereco']; ?>" required>

    <br><br>

    <label for="cidade">Cidade</label><br>
    <input type="text" id="cidade" name="cidade" class="campos" values="<?php echo $dados['cidade']; ?>" required>

    <br><br>

    <label for="estado">Estado</label><br>
    <input type="text" id="estado" name="estado" class="campos" values="<?php echo $dados['estado']; ?>" required>

    <br><br>

    <label for="cep">CEP</label><br>
    <input type="text" id="cep" name="cep" class="campos" values="<?php echo $dados['cep']; ?>" required>

    <br><br>

    <label for="nascimento">Data de nascimento</label><br>
    <input type="date" id="nascimento" name="nascimento" class="campos" values="<?php echo $dados['nascimento']; ?>" required>

    <br><br>

    <input type="submit" class="botao" name="Atualizar">
    <br><br>
    <a href="dados.php" class="botao-voltar">Cancelar</a>

</section>

</body>
</html>