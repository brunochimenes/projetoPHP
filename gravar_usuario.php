<?php
  require __DIR__ . "/restrictedArea/crud.php";
  
  $name = $_POST['name'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  if(Create("usuarios", $_POST) == 1){
    echo "Cadastrado com sucesso";
  }else {
    echo "Erro ao cadastrar";
  }