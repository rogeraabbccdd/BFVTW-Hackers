<?php
  require_once './configs.php';
  header('Content-Type: application/json; charset=utf-8');
  header('Access-Control-Allow-Origin: '.$corsurl);
  
  $response['last_update'] = $pdo->query('SELECT last_update FROM '.$time_table)->fetchAll()[0][0];
  $response['hackers'] = $pdo->query('SELECT * FROM '.$hack_table)->fetchAll(PDO::FETCH_ASSOC);
  $response = json_encode($response);
  echo $response;

  
  $pdo = null;
?>