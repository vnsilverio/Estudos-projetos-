<?php
include ('conexao.php');

$sql = "SELECT * FROM produtos";
$resultado = $conecta ->query ($sql);
?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
      <meta charset= "UTF-8">
      <title> LIsta de Produtos </title>

    </head>

<body>
    <h2> Produtos Cadastrados</h2>
<a href="adicionar_produtos.php">+Adicionar Produto</a><br>

// adicionar  b.d

