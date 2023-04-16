<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
       $s = 65;
       print "あなたの得点は $s 点です。<br>\n";

       if ($s < 70) {
            print "平均まであと" . (70 - $s) . "点<br>\n";
            print "よくできました！<br>\n";
       } else {
            print "よくできました！<br>\n";
       }
    ?>
</body>
</html>