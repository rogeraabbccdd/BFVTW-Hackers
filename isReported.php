<?php
  require_once './configs.php';

  header('Content-Type: application/json; charset=utf-8');
  header('Access-Control-Allow-Origin: '.$corsurl);

  $input = array(
    ':name' => $_GET['name'],
  );
  $sql = 'SELECT * FROM '.$hack_table.' WHERE name = :name';
  $sth = $pdo->prepare($sql);
  $sth->execute($input);
  $result = $sth->fetchAll();

  if(count($result) > 0) $reported = true;
  else $reported = false;

  echo json_encode(array('reported' => $reported));

  $pdo = null;
?>