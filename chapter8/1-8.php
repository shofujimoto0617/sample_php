<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hashira = [
            '水柱' => '鱗滝左近次',
            '蟲柱' => '胡蝶しのぶ',
            '炎柱' => '煉獄杏寿郎',
            '音柱' => '宇髄天元',
            '霞柱' => '時透無一郎',
            '岩柱' => '悲鳴嶼行冥',
            '蛇柱' => '伊黒小芭内',
            '風柱' => '不死川実弥'
        ];
        echo $hashira['水柱'];
        $hashira['水柱'] = '富岡義勇';
        echo '<br/>';
        echo $hashira['水柱'];
        echo '<br/>';
        $hashira['web柱'] = 'おさない';
        echo $hashira['web柱'];
        echo '<br/>';
        var_dump($hashira);
    ?>
</body>
</html>