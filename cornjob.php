<?php
  require_once './configs.php';

  // too many hackers gg :(
  set_time_limit(0);

  // last update time
  $date = date('Y-m-d H:i:s', strtotime('now'));
  $count = $pdo->exec('UPDATE '.$time_table.' SET last_update = "'.$date.'"');
  if($count === 0) {
    $pdo->exec('INSERT INTO '.$time_table.' VALUES ("'.$date.'")');
  }
  
  // update hackers
  $result = $pdo->query('SELECT * FROM '.$hack_table)->fetchAll();
  foreach ($result as $row) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_AUTOREFERER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, "https://api.tracker.gg/api/v2/bfv/standard/profile/origin/" . $row['name']);
    $result = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($result, true);

    $kills = 0;

    // player exists
    if (!empty($data['data'])) {
        $kills = $data['data']['segments'][0]['stats']['kills']['value'];

        if($kills > $row["kills"])
        $pdo->exec('UPDATE '.$hack_table.' SET kills = '.$kills.', last_update = "'.$date .'" WHERE id = "'.$row['id'].'"');
    }
  }

  $pdo = null;
?>