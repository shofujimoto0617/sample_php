<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = -1;

        if ($x > 0) {
            if ($x % 2 === 0) {
                echo '正の偶数';
            } else {
                echo '正の奇数';
            }
        } else if ($x < 0) {
            if ($x % 2 === 0) {
                echo '負の偶数';
            } else {
                echo '負の奇数';
            }
        } else {
            echo 'ゼロ';
        }
    ?>
</body>
</html>