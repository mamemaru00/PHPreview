<?php
    //クッキー情報を格納する
    $counter = isset($_COOKIE['visittimes']) ? $_COOKIE['visittimes'] : '';
    //もし変数$counterがあれば値に1増やし、なければ1を代入する
    if (isset($counter)) {   //isset()関数で変数があるか確認する
        $counter++;
    } else {
        $counter = 1;      
    }
    //もし変数$counterが3より大きければクッキーを削除する
    if ($counter > 3) {
        setcookie('visittimes', $counter, time() - 60);
    } else {
        setcookie('visittimes', $counter);
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
       if ($counter == 1) {
        //初めてのアクセス
        print "初めまして!<br>\n";
       } else if ($counter == 2) {
        //2回目のアクセス
        print $counter . "回目のご訪問ですね";
       } else if ($counter == 3) {
        //3回目のアクセス
        print $counter . "回目のご訪問ですね";
        print "あなたのブラウザは \"{$_SERVER['HTTP_USER_AGENT']}\" ですね。<br>\n";
       } else {
        //4回目のアクセス
        print $counter . "回目のご訪問ですね";
        print "次回訪問時に訪問回数をリセットされます。<br>\n";
       } 
    ?>
</body>
</html>