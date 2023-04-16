<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "おはよう";
        $b = "しおりさん";

        function funcl($p) {
            global $b;
            print $p;
            print $b;
        }
        funcl($a);

        print "<br>";

        $func2 = function($p) use ($b) {
            print $p;
            print $b;
        };
        $func2($a);
    ?>
</body>
</html>