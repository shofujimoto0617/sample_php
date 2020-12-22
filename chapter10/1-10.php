<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo "{$i}回目の繰り返しです";
            echo '<br/>';
        }
        for ($i = 1; $i < 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j < 10; $j++) {
                $x = $i * $j;
                echo "<td>{$x}</td>";
            }
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>