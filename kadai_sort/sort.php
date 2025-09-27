<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php

    $nums = [15, 4, 18, 23, 10];

    function sort_2way(array $array, bool $order) {

      if($order === true) {
        sort($array);
        echo "昇順にソートします。<br>";
        foreach($array as $value) {
          echo "$value<br>";
        }
      } else {
        rsort($array);
        echo "降順にソートします。<br>"; 
        foreach($array as $value) {
          echo "$value<br>";
        }
      }
    }

    sort_2way($nums,true);

    sort_2way($nums,false);
    


    ?>
  </p>

</body>

</html>