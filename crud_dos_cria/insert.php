<?php
require_once('./connect.php');

$sql = 'INSERT INTO users(nome, email, senha, telefone) VALUES(:nome, :email, :senha, :telefone)';
$parametro = array(
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':senha' => $_POST['senha'],
    ':telefone' => $_POST['telefone']
);
$querry = $conn->prepare($sql);
$querry->execute($parametro);

header("location: produto-listar.php");
?>