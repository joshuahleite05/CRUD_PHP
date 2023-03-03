<?php
require_once('./connect.php');

$sql = "DELETE FROM users WHERE id = $_GET[id]";

$querry = $conn->prepare($sql);
$querry->execute();
$querry->fetchAll();

header("location: produto-listar.php");

?>
