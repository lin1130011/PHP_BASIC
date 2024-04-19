<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈練習</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h2>矩形</h2>
    <?php
    $str = "*";
    $str2 = "&nbsp";
    for ($i = 0; $i < 7; $i++) {

        for ($j = 0; $j < 7; $j++) {

            if ($i == 0 || $i == 6) {
                echo $str;
            } else if ($j == 0 || $j == 6) {
                echo $str;
            } else {
                echo $str2;
            }
        }
        echo "<br>";
    }
    ?>
    <h2>矩形2</h2>
    <?php
    $str = "*";
    $str2 = "&nbsp";
    for ($i = 0; $i < 7; $i++) {

        for ($j = 0; $j < 7; $j++) {

            if ($i == 0 || $i == 6) {
                echo $str;
            } else if ($j == 0 || $j == 6 || $j == $i || $j == (6 - $i)) {
                echo $str;
            } else {
                echo $str2;
            }
        }
        echo "<br>";
    }
    ?>


</body>

</html>