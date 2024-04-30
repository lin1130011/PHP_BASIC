<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item {
            margin-left: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid green;
        }
    </style>
</head>

<body>
    <?php
    $str = "日 一 二 三 四 五 六";
    $heade = explode(" ", $str);
    foreach ($heade as $key => $value) {
        echo "<div class='item'>$value</div>";
    }

    $today = date("Y-m-d");
    $days = [];
    for ($i = 0; $i < 42; $i++) {
        if ($i >= $first)
            $days[] = date("d", strtotime("+ $i day", strtotime($today)));
    }
    echo "<div style='width:357px'>";


    foreach ($days as $day) {

        echo "<div class='item'>$day</div>";
    }
    echo "</div>";
    ?>
</body>

</html>