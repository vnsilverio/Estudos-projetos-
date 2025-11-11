<?php
$localhost = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja";

$conecta = new mysql($localhost, $usuario, $senha, $banco);

if ($conecta ->conect_error) {
    die ("Erro na conexão: " .
    $conecta ->connect_error);
}
?>
