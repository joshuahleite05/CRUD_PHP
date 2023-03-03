<?php
require_once('./connect.php');

$sql = "UPDATE users SET
nome = '".$_POST['nome']."', senha = '".$_POST['senha']."' ,email = '".$_POST['email']."',telefone = '".$_POST['telefone']."'
WHERE id = $_GET[id]";

$querry = $conn->prepare($sql);
$querry->execute();
$testes = $querry->fetchAll();

header("location: produto-listar.php");
?>

