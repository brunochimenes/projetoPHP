<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto PHP</title>
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
      
      //CRIAR USUARIOS
      /*$data = [
        "name" => "Chico",
        "login" => "chico@gmail.com",
        "password" => "123",
      ];
      if(Create("usuarios", $data) == 1){
        echo "Cadastrado com sucesso!";
      }else {
        echo "Erro ao cadastrar";
      }*/

      //ALTERAR USUARIOS
      /*$data = [
        "name" => "Keise",
        "login" => "keise@gmail.com",
        "password" => "1234",
      ];
      if(Update("usuarios", $data, "id = 4") == 1){
        echo "Atualizado com sucesso!";
      }else {
        echo "Erro ao atualizar";
      }*/

      //DELETAR USUARIOS
      /*if(Delete("usuarios", "id = 4") == 1){
        echo "Deletado com sucesso";
      }else {
        echo "Erro ao deletar";
      }*/

    ?>

    <br>
    <br>

    <a href="cadastro_usuario.php">CADASTRAR</a>
</body>
</html>