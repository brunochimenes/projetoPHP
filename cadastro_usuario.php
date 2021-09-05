<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto PHP</title>
</head>
<body>
  <form action="gravar_usuario.php" method="POST">
    <label for="name">Nome:</label>
    <input type="text" name="name" required>

    <label for="name">Login:</label>
    <input type="text" name="login" required>

    <label for="name">Senha:</label>
    <input type="password" name="password" required>

    <input type="submit" value="SALVAR">
  </form>

  <br>
  <br>
  
  <a href="index.php">VOLTAR</a>
</body>
</html>