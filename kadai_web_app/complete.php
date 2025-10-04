<?php
session_start();

$employee_name = isset($_SESSION['employee_name']) ? $_SESSION['employee_name'] : '名無し';

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
</head>

<body>
  <h2>登録が完了しました。</h2>
  <p>社員情報がデータベースに保存されました。</p>

  <button id=back-btn onclick="location.href='form.php';">戻る</button>

  <?php
  $_SESSION = array();
  session_destroy();
  ?>

</body>
</html>
