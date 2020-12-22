<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 'こんにちは、' . 'チャンネル登録してね。';
        echo $x;

        echo '<br/>';

        $y = '最' . '&' . '高';
        echo $y;

        echo '<br/>';

        $a = 0.1 + 0.2 - 0.5;
        echo $a;

        echo '<br/>';

        $b = 100 - 99.6;
        echo $b;

        echo '<br/>';

        $t = TRUE;
        $f = FALSE;
        echo $t;
        echo $f;

        echo '<br/>';

        $i = TRUE && FALSE;
        $o = TRUE and FALSE;
        $z = ! TRUE;
        $z = ! FALSE;
    ?>
</body>
</html>