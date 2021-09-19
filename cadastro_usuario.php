<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto PHP</title>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/principal.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  
  <form class="form-user" action="gravar_usuario.php" method="POST">
    <h1>Cadastre-se</h1>
    <div class="resposta"></div>
    
    <label for="name">Nome:</label>
    <input type="text" name="name" required>

    <label for="name">Login:</label>
    <input type="text" name="login" required>

    <label for="name">Senha:</label>
    <input type="password" name="password" required>

    <input class="btn-user" type="submit" value="SALVAR">
  </form>

  <a href="index.php">VOLTAR</a>

  <div class="modal"></div>
</body>
</html>