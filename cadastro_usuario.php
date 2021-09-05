<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="gravar_usuario.php" method="POST">
    <label for="name">Nome:</label>
    <input type="text" name="name">

    <label for="name">Login:</label>
    <input type="text" name="login">

    <label for="name">Senha:</label>
    <input type="password" name="password">

    <input type="submit" value="SALVAR">
  </form>

  <a href="index.php">VOLTAR</a>
</body>
</html>