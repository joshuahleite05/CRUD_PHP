<?php
require_once('./connect.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>crud</title>
</head>
<body>
    <div class="pos espacamento">
        <form action="./teste.php?id=<?= $_GET['id'] ?>" method="POST" autocomplete="off">
    <div class="espaco">
        <div class="pos">
        <h1>CRUD - Atualizar</h1>
        </div>
        <label for="nome">Nome</label>
        <input type="text" placeholder="Insira seu nome" name="nome" autocomplete="off">
        <br>
        <label for="email">email</label>  
        <input type="text" placeholder="Insira seu email" name="email" autocomplete="off">
        <br>
        <label for="senha">senha</label>
        <input type="password" placeholder="Insira sua senha" name="senha" autocomplete="off">
        <br>
        <label for="telefone">telefone</label>
        <input type="text" placeholder="Insira seu telefone" name="telefone" autocomplete="off">
        <br>
        <button type="submit">Enviar</button>
    </div>
</div>
</form>
</body>
</html>