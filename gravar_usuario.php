<?php
  sleep(1); 
  require __DIR__ . "/restrictedArea/crud.php";
  
  $name = $_POST['name'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  if($name === ''){
    $retorn['codigo'] = "0";
    $retorn['mensagem'] = "Nome não pode ser vazio!";
  }elseif($login === ''){
    $retorn['codigo'] = "0";
    $retorn['mensagem'] = "Login não pode ser vazio!"; 
  }elseif($password === ''){
    $retorn['codigo'] = "0";
    $retorn['mensagem'] = "Senha não pode ser vazio!";
  }else {
    if(Create("usuarios", $_POST) == 1){
      $retorn['codigo'] = "1";
      $retorn['mensagem'] = "Usuário cadastrado com sucesso!";
    }
  }

  echo json_encode($retorn);