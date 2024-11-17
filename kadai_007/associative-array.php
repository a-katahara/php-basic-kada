<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>この文章はHTMLで出力しています。</p>
  <p>
    <?php
    // 配列に値を代入する
    $items_list = ["name" => "onion", "age" => 200, "weight" => "160"];

    // 配列に値を出力する
    print_r($items_list);
    ?>
  </p>
</body>

</html>