<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto PHP</title>
</head>
<body>
  <?php require_once __DIR__ . "/conexao.php"; ?>

  <h1>Lista dos Usuários</h1>

  <?php
    $sql = "SELECT * FROM usuarios";

    $result = mysqli_query($conexao, $sql);
    //echo $result->num_rows;

    while ($item = mysqli_fetch_array($result)) {
      echo "<p> Nome: " . $item['name'] . " - Login: " . $item['login'] . "</p>";
    }
    ?>

    <a href="cadastro_usuario.php">CADASTRAR</a>
</body>
</html>