<?php
  // 資料庫設定
  $db_host = '';
  $db_name = '';
  $db_user = '';
  $db_password = '';

  // 資料表名稱
  $hack_table = '';
  $time_table = '';

  // 時區
  $timezone = 'Asia/Taipei';

  // 前端網頁 URL
  $corsurl = '';

  // recaptcha
  $recaptcha_secret = '';

  /* DO NOT CHANGE BELOW IF YOU DON'T KNOW WHAT YOU ARE DOING */

  date_default_timezone_set($timezone);

  try {
      $pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  } catch (PDOException $e) {
      die($e->getMessage());
  }
?>
