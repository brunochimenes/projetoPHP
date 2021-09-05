<?php
  require_once __DIR__ . "/conexao.php";

  //var_dump($conexao);

  //var_dump($_POST['name']);

  $name = $_POST['name'];
  $login = $_POST['login'];
  $password = $_POST['password'];

  $sql = "INSERT INTO usuarios (name, login, password) VALUES ('$name', '$login', '$password')";

  //echo $sql;

  $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

  if($result) {
    echo "Cadastrado com sucesso!";
  };