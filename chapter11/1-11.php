<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [12, 45, 22, 67, 36, 5, -8, 56, 13];

        // $num = count($arr);

        $message = '含まれていません';

        // for ($i = 0; $i < $num; $i++) {
        //     $value = $arr[$i];
        //     if ($value < 0) {
        //         $message = '含まれています';
        //         break;
        //     }
        // }
        // echo $message;

        // echo '<br/>';

        // $sum = 0;

        // for ($i = 0; $i < $num; $i++) {
        //     $value = $arr[$i];
        //     if ($value % 2 === 1) {
        //         continue;
        //     }
        //     $sum += $value;
        // }
        // echo $sum;

        // echo '<br/>';

        // $i = 0;

        // while ($i < $num) {
        //     $value = $arr[$i];
        //     if ($value < 0) {
        //         $message = '含まれています';
        //         break;
        //     }
        //     $i++;
        // }
        // echo $message;

        // echo '<br/>';

        // foreach($arr as $value) {
        //     if ($value < 0) {
        //         $message = '含まれています';
        //         break;
        //     }
        // }
        // echo $message;

        // echo '<br/>';

        $fruits = [
            'りんご' => 3,
            'みかん' => 2,
            'ぶどう' => 6
        ];

        foreach ($fruits as $key => $value) {
            echo "{$key}の個数は{$value}個です";
            echo '<br/>';
        }

    ?>
</body>
</html>