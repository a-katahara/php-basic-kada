<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=p, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
    // step2 連想配列の作成
    /*
    キー: 名前、値: 玉ねぎ
    キー: 値段、値: 200
    キー: 産地、値: 北海道
    */
    $products = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];

    // step3 値を出力する
    foreach ($products as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </p>
</body>

</html>