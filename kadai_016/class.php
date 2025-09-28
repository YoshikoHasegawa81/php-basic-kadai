<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo $this->price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height;
      }
    }

    $food_1 = new Food('ラーメン',1200);
    $animal_1 = new Animal('ゴリラ',200,150);

    print_r($food_1);
    echo '<br>';
    print_r($animal_1);
    echo '<br>';

    $food_1->show_price();
    echo '<br>';
    $animal_1->show_height();
    

    ?>
  </p>
</body>
</html>
