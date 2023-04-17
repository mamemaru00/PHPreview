<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付のフォーマット</title>
</head>
<body>
    <?php
        $olddate = "2022/ 3/ 1";
        if (preg_match("/^[ 0-9]+¥/[ 0-9]+¥/[ 0-9]+$/", $olddate)) {
            list($year, $month, $day) = preg_split("/¥//", $olddate);
            $newdate = sprintf("%04d-%02d-%02d", $year, $month, $day);
            print $newdate;
        } else {
            print "日付ではありませんでした。<br>\n";
        }
    ?>
</body>
</html>