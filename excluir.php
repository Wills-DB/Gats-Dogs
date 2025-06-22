<?php

require_once('conexao.php');

if (isset($_GET[ 'id'])) {
    $id = intval($_GET['id']);

    $bancoDados = new db();
    $link = $bancoDados->conecta_mysql();

    $sql = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($link, $sql);

}
header ("Location: dados.php");
exit;
?>