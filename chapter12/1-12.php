<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [1, 2, 3];
        $x = count($arr);
        echo $x;

        echo '<br/>';

        $x = -10;
        $y = abs($x);
        echo $y;

        echo '<br/>';
        
        function add($x, $y) {
            $z = $x + $y;
            return $z;
        }

        $z = 0;

        $a = 15;
        $b = 19;
        
        $sum = add($a, $b);
        echo $z;
    ?>
</body>
</html>