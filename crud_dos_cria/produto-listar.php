<?php
require_once('./connect.php');

$sql = "SELECT * FROM users";
$querry = $conn->prepare($sql);
$querry->execute();

$testes = $querry->fetchAll();

$testeXd = json_decode(json_encode($testes), false);





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"> -->
    <title>Listar Produto</title>
</head>
<body>
    <div class="pos espacamento">
        <div class="pos_col">
        <div class="title">
          <div class="esq">
            <h1>Lista de usuarios</h1>
            </div>
            <div class="dir">
              <a href='index.php' id="criar">Criar</a>
            </div>
        </div>
        
        <div class="prod">
            <table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($testeXd as $teste){ ?>
    <tr>
      <th scope="row"><?= $teste->id ?></th>
      <td><?= $teste->nome ?></td>
      <td><?= $teste->email ?></td>
      <td><?= $teste->senha ?></td>
      <td><?= $teste->telefone ?></td>
      <td><a href="<?= 'edit.php?id=' . $teste->id ?>" class="btn" value="<?= $teste->id ?>">Editar</a>
      <a href="<?= 'delete.php?id=' . $teste->id ?>" class="apagar"  value="<?= $teste->id ?>">Apagar</a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
        </div>
    </div>
    </div>
</body>
</html>