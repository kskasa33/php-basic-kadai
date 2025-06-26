<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題016</title>
</head>

<body>
   <p>
       <?php
       // Foodクラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;
           // コンストラクタを定義する
           public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
           }
           public function getPrice():int{
            return $this->price;
          }
           public function show_info() {
               echo $this->name ;
               echo $this->price;
          }
           
       }

      // Animalクラスを定義する
       class Animal {
           // プロパティを定義する
           private $name;
           private $height;
           private $weight;
           // コンストラクタを定義する
           public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
           }
           public function getHeight():int{
            return $this->height;
          }
           public function show_info() {
               echo $this->name;
               echo $this->height;
               echo $this->weight;
          }
       }

       // Foodをインスタンス化する
       $food = new Food('potato',250);
       $animal = new Animal('dog',60,5000);

      // 表示
       print_r($food);
       echo '<br>';
       print_r($animal);
       echo '<br>';
       echo $food->getPrice().'<br>';
       echo $animal->getHeight();      
       ?>
   </p>
</body>

</html>