<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .block-table {
            width: 357px;
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid lightgreen;
        }

        .item-header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 25px;
            border: 1px solid lightgreen;
            text-align: center;
            background-color: darkgreen;
            color: lightgreen
        }
    </style>
</head>

<body>
    <?php
    $str = "日 一 二 三 四 五 六";
    $heade = explode(" ", $str);
    foreach ($heade as $key => $value) {
        echo "<div class='item-header'>$value</div>";
    }
    $year = 2024;
    $month = 4;
    $firstday = date("$year-$month-01");
    // 取得該月第一天的時間戳
    $firstday_stemp = strtotime($firstday);
    // 取的該月第一天是星期幾
    $firstday_is = date("w", $firstday_stemp);
    // 取的該月共有幾天
    $days_in_month = date("t", $firstday_stemp);

    $days = [];
    for ($i = 0; $i < 42; $i++) {
        $diff = $i - $firstday_is;
        $days[] = date("Y-m-d", strtotime("$diff days", $firstday_stemp));
    }

    echo "<div style='width:357px'>";
    foreach ($days as $day) {
        $format = explode("-", $day)[2];
        $w = date("w", strtotime($day));
        if ($w == 0 || $w == 6) {

            echo "<div class='item' style='background:pink'>$format</div>";
        } else {

            echo "<div class='item'>$format</div>";
        }
    }
    echo "</div>";
    ?>
</body>

</html>