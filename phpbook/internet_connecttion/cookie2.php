<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $getval = isset($_COOKIE['val']) ? $_COOKIE['val'] : "( なし )";
        // print "ペーシ2の値は $getval です。\n"; 
        
        $_SESSION['bridge'] = 100;
        $b = $_SESSION['bridge'];
        print "ペーシ2の値は $b です。\n";  
    ?>
    <p><a href='cookie1.php'>ページ1へ</a></p>
</body>
</html>