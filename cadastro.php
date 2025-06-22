<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>Cadastro de usuario</h1>
        <nav class="menu">

            <a href="cadastro.php">Cadastro</a>
            <a href="dados.php">Usuário</a> 

        </nav>
</header>

<br>

<section>
    <h2>CADASTRO</h2>
    <br>
<form action="validar.php" method="post" id="usuarios" target="">

    <label for="usuario">Usuário</label>
    <input type="text" id="usuario" name="usuario" class="campos" placeholder="Nome de usuário">
    
    <br><br>
    
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" class="campos" placeholder="digite seu email">
    
    <br><br>
    
    <label for="telefone">telefone</label><br>
    <input type="text" id="telefone" name="telefone" class="campos" placeholder="digite seu numero de Telefone">
    
    <br><br>

    <label for="endereco">Endereço</label><br>
    <input type="text" id="endereco" name="endereco" class="campos" placeholder="digite seu endereço">

    <br><br>

    <label for="cidade">Cidade</label><br>
    <input type="text" id="cidade" name="cidade" class="campos" placeholder="digite a sua cidade">

    <br><br>

    <label for="estado">Estado</label><br>
    <input type="text" id="estado" name="estado" class="campos" placeholder="digite o seu estado">

    <br><br>

    <label for="cep">CEP</label><br>
    <input type="text" id="cep" name="cep" class="campos" placeholder="digite o seu CEP">

    <br><br>

    <label for="nascimento">Data de nascimento</label><br>
    <input type="date" id="nascimento" name="nascimento" class="campos" placeholder="digite a sua data de nascimento">

    <br><br>

    <input type="submit" class="botao" name="cadastrar">


</form>

</section>
<br>

<footer>

<h3>Infromações Confidenciais</h3>
<h4><a href="principal.php" target="_blank" title="voltar">Voltar </a></h4>

</footer>

</body>
<script>

document.getElementById( 'telefone').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, ''); 
    if (value.length <= 10) {
        value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
    }else {
    value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
}
    e.target.value=value;

});

document.getElementById('cep').addEventListener ('input', function(e) {
    let value = e.target.value.replace(/\D/g, ''); 
    value = value.replace(/^(\d{5}) (\d{0,3})/, '$1-$2');
    e.target.value = value;
});

document.getElementById( 'estado').addEventListener ('input', function(e) {
    let value = e.target.value.toUpperCase();
    value = value.replace(/[^A-Z]/g,''); 
    if (value.length > 2) {
        value = value.substring(0, 2); 
    }
    e.target.value=value;
});

</script>

</html>