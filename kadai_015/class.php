<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題15</title>
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
          echo $this->price . '<br>';
        }
      }

      $food = new Food('poteto', 250);

      print_r($food);
      ?>
  </p>
  <p>
    <?php
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
          echo $this->height . '<br>';
        }
      }

      $animal = new Animal('dog', 60, 5000);

      print_r($animal);
      echo '<br>';
    ?>
  </p>

  <p>
    <?php
      $food->show_price();
      $animal->show_height();
    ?>
  </p>
</body>
</html>