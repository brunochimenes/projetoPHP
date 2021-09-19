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
  <h1>Lista dos Usuários</h1>

    <?php
      include __DIR__ . "/restrictedArea/crud.php";

      //LISTAR USUARIOS
      $result = Read("usuarios");
      foreach($result as $key => $value) {
        echo "<p>Nome: {$value['name']} - Login: {$value['login']}</p>";
      }
    ?>
    
    <div class="respostas"></div>

    <a href="cadastro_usuario.php">CADASTRAR</a>
</body>
</html>