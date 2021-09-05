<?php
  require __DIR__ . "/connection.php";

  function Read($table, $fields = "*", $condition = null){
    $condition = ($condition) ? "WHERE {$condition}" : null;

    $sql = "SELECT {$fields} FROM {$table} {$condition}";

    $result = Execute($sql);
    //var_dump($result);

    if(!mysqli_num_rows($result)){
      return false;
    }else{
      while($record = mysqli_fetch_assoc($result)){
        $data[] = $record;
      }
    }
    return $data;
  }

  function Create($table, array $data){
    $fields = implode(",", array_keys($data));
    //echo $fields;

    $value = "'" . implode("','", $data) . "'";
    //echo $value;

    $sql = "INSERT INTO {$table} ({$fields}) VALUES ({$value})";
    //echo $sql;

    return Execute($sql);
  }

  function Update($table, array $data, $condition = null){
    foreach($data as $key => $value) {
      $fields[] = "{$key} = '{$value}'";
    }

    $fields = implode(",", $fields);

    $condition = $condition ? "WHERE {$condition}" : null;
    
    $sql = "UPDATE {$table} SET {$fields} {$condition}";

    return Execute($sql, true);
  }

  function Delete($table, $condition = null){
    $condition = $condition ? "WHERE {$condition}" : null;

    $sql = "DELETE FROM {$table} {$condition}";
    
    return Execute($sql, true);
  }

  function Execute($sql, $linhaAfetada = false){
    $mysqli = OpenConnection();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if($linhaAfetada) {
      return mysqli_affected_rows($mysqli);
    }

    CloseConnection($mysqli);

    return $result;
  }