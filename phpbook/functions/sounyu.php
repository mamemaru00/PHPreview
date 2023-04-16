<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require 'yomikomi1.php'; 
        print "yomikomi1.phpの挿入・・・$a<br>\n";
        
        include_once 'yomikomi2.php';
        print "yomikomi2.phpの挿入・・・$a<br>\n";
    ?>
</body>
</html>