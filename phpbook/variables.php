<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $a = array(1, 2, 3);
        // $a[0] = "One";
        // $a[1] = "Two";
        // $a[2] = "There";
        // $n = 2;
        // print $a[$n];

        //連想配列
        // $a = array('dog' => 'いぬ', 'cat' => 'ネコ');
        // print $a['dog'];

        //多次元配列
        // $a1 = array(1, 2, 3);
        // $a2 = array(4, 5, 6);
        // $a = array($a1, $a2);
        // print $a[1][0];

        //配列のハイキ
        // $a =array("a", "b", "c");
        // unset($a[1]);
        // unset($a);
        // print($a);

        //配列の差を取得する
        // $a = array(1, 2, 3);
        // $b = array(1, 3, 4);
        // $c = array_diff($a, $b);
        // var_dump($c);

        //配列の要素を追加
        // $a = array(1, 2, 3);
        // array_push($a, 5, 6);
        

        //定義済みの定数
        $line = __LINE__;
        print "$line<br>\n";

        $file = __FILE__;
        print "$file\n";
    ?>
</body>
</html>