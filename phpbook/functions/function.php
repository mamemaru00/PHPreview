<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      function getCharRange($s) {
        $pos1 = $pos2 = -1;
        for ($i=0; $i<strlen($s); $i++) { 
            if ($s[$i] == "i") {
                if ($pos1 < 0) {
                    $pos1 = $i;
                }
                $pos2 = $i;
            }
        }
        return array($pos1+1, $pos2+1);
      }

      list($begin, $end) = getCharRange("Shiori");
      print "Shiori の中で i が出てくるのは、";
      print "$begin 文字目から $end 文字目まで。"; 
    ?>
</body>
</html>