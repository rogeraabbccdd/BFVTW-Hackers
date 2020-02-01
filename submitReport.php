<?php
  require_once './configs.php';

  header('Content-Type: application/json; charset=utf-8');
  header('Access-Control-Allow-Origin: '.$corsurl);

  try {
    // post data
    if(empty($_POST['recaptcha']) && empty($_POST['name']) && empty($_POST['video']))  throw new Exception('沒有收到表單資料');
    
    // captcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_response = $_POST['recaptcha'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_AUTOREFERER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $result = curl_exec($curl);
    curl_close($curl);
    $recaptcha = json_decode($result, true);
    $response['success'] = false;
    $response['message'] = '';
    if ($recaptcha['success'] != 1) throw new Exception('reCAPTCHA 驗證失敗');

    // is reported
    $input = array(
      ':name' => $_POST['name'],
    );
    $sql = 'SELECT * FROM '.$hack_table.' WHERE name = :name';
    $sth = $pdo->prepare($sql);
    $sth->execute($input);
    $result = $sth->fetchAll();
    if(count($result) > 0) throw new Exception('玩家已被回報');

    // get kills
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_AUTOREFERER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, "https://api.tracker.gg/api/v2/bfv/standard/profile/origin/" . $_POST['name']);
    $result = curl_exec($curl);
    curl_close($curl);
    $kills = json_decode($result, true);
    if (empty($kills['data'])) throw new Exception('無法取得 Tracker 資料');
    $kills = $kills['data']['segments'][0]['stats']['kills']['value'];

    // insert into db
    $date = date('Y-m-d H:i:s', strtotime('now'));
    $input = array(
      ':name' => $_POST['name'],
      ':kills' => $kills,
      ':video' => $_POST['video'],
      ':report_date' => $date,
      ':last_update' => $date
    );

    $sql = 'INSERT INTO '.$hack_table.' VALUES (null, :name, :kills, :video, :report_date, :last_update)';
    $statement = $pdo->prepare($sql);
    $statement->execute($input);
    if($pdo->lastInsertId() === 0) throw new Exception('新增資料失敗');

    $response['success'] = true;

  } catch (Exception $e) {
    $response['message'] = $e->getMessage();
  }

  echo json_encode($response);

  $pdo = null;
?>