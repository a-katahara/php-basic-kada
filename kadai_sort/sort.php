<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step3. 独自のソート関数を作る
        /*
        関数名:sort_2way
        ソート対象の配列:$array
        ソート方向（TRUE：昇順／FALSE：降順）:$orderで指定
        戻り値:なし
        機能:第2引数に指定したソート方向（昇順／降順）で、第1引数の配列をソートする。
        */
        function sort_2way($array, $order){
          if ($order === true) {
            echo "昇順にソートします。<br>";
            sort($array);
            foreach ($array as $num) {
              echo $num . "<br>";
            }
          }else{
            echo "降順にソートします。<br>";
            rsort($array);
            foreach ($array as $num) {
              echo $num . "<br>";
            }
          }
        }

        // Step4. ソート対象の配列を用意する
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // Step5. 独自のソート関数を呼び出
        /*
        ソート関数:sort_2way
        「昇順ソート」「降順ソート」の順番に2回呼び出し
        */
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>

</html>