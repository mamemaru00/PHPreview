<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $getval = isset($_COOKIE['val']) ? $_COOKIE['val'] : "( なし )";
        // print "ペーシ1の値は $getval です。\n";    

        $_SESSION['bridge'] = 100;
        $b = $_SESSION['bridge'];
        print "ペーシ1の値は $b です。\n";    
    ?>
    <p><a href='cookie2.php'>ページ2へ</a></p>
</body>
</html>