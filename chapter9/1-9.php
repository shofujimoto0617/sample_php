<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = ['清水', '二岡', '高橋', '松井'];
        array_push($a, '清原', '江藤', '元木');
        $a[] = 'イチロー';
        var_dump($a);

        echo '<br/>';

        $b = ['山田', '田中', '岡田', '東野'];
        $c = ['時川', '島野', '藤川'];
        $merged = array_merge($b, $c);
        var_dump($merged);

        echo '<br/>';
        var_dump($b);

        echo '<br/>';
        $d = ['トマト', 'キャベツ', 'にんじん'];
        array_unshift($d, '黄ピーマン', '赤ピーマン');
        var_dump($d);

        echo '<br/>';
        $e = ['山', '川', '空', '海'];
        $first = array_shift($e);
        var_dump($first);

        echo '<br/>';
        $f = ['小学', '中学', '高校', '大学'];
        $last = array_pop($f);
        var_dump($last);


    ?>
</body>
</html>