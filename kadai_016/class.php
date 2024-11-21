<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
    // Step2. クラスを作成する
    /*
    ・「Food」と「Animal」クラスを作成します。
    ・「Food」クラスには「name」「price」プロパティを、「Animal」クラスには「name」「height」「weight」プロパティを定義します。
    ・「Food」クラスには「price」プロパティの値を出力する「show_price」メソッドを、「Animal」クラスには「height」 プロパティの値を出力する「show_height」メソッドをそれぞれ作成します。
    ・プロパティに値を代入するコンストラクタをそれぞれのクラスに作成します。
    */
    class Food
    {
      private $name;
      private $price;

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price()
      {
        echo $this->price . "<br>";
      }
    }

    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height()
      {
        echo $this->height . "<br>";
      }
    }

    // Step3. インスタンスを作成し、出力する
    $food = new Food("poteto", 250);
    $animal = new Animal("dog", 60, 5000);

    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // Step4. メソッドへアクセスする
    $food->show_price();
    $animal->show_height();

    ?>
  </p>

</body>

</html>