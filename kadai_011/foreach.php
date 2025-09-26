<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP課題3</title>

<body>
  <p>
    <?php
    $products = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach ($products as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>
</html>

