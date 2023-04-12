<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $a = 90;
        // $a += 10;
        // print "90に10を足すと $a です。";

        // $a = 1;
        // print "初めは $a でした。<br>\n";
        // $a++;
        // print "1増えて $a になりました。<br>\n";
        // $a--;
        // print "1減って $a に戻りました。<br>\n";

        // $a = 10;
        // $b = 20;

        // print '$a < $b : ';
        // print ($a < $b );
        // print "<br>\n";
        // print '$a > $b : ';
        // print ($a > $b );

        $a = ["ehon", "shiori"];
        $b = $a[0] <=> $a[1];
        print "$a[0]は$a[1]";
        print $b == 0 ? "と同じ" :
            ($b < 0 ? "よりも辞書的に前" : "よりも辞書的に後");
            print "です";
    ?>
</body>
</html>