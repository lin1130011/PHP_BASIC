<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆實作</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .size {
            width: 357px;
            margin: auto;
        }

        .header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid lightgreen;
            background-color: green;
        }

        .inner {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid lightgreen;
            text-align: center;
        }

        .inner.holiday {
            background-color: pink;
        }

        .inner.test {
            color: gray;
        }
    </style>
</head>

<body>
    <?php
    $str = "日 一 二 三 四 五 六";
    $header = explode(" ", $str);
    $year = 2024;
    $month = 5;
    // 取得該月一號的日期格式
    $firstday = date("$year-$month-01");
    // 將該月一號的日期格式變為時間戳;
    $firstday_stemp = strtotime($firstday);
    // 取得該月第一天是星期幾
    $firstday_is = date("w", $firstday_stemp);
    // 取得該月份總共有幾天
    $days_in_month = date("t", $firstday_stemp);
    // 取得該月份最後一天的時間戳
    $last_day = date("$year-$month-$days_in_month");
    $last_day_stemp = strtotime($last_day);

    $days = [];
    // 一周七天 一個月最多六周有四十二天
    for ($i = 0; $i < 42; $i++) {
        // 計算$i 與 該月第一天的差值
        $diff = $i - $firstday_is;
        // 從該月一號為基準值用偏移量算出超出該月 或小於該月的日期為多少 並把所有資料存在$day陣列中
        $days[] = date("Y-m-d", strtotime("$diff days", $firstday_stemp));
    }

    echo "<div class='size'>";
    foreach ($header as $key => $value) {
        echo "<div class = 'header'> $value </div>";
    }
    foreach ($days as $key => $day) {
        //將日期格式Y-m-d 以"-"分開成為陣列 其中索引0 對應到年分 索引1 對應到月份 索引2 對應到日期 所以我們取[2]
        $data = explode("-", $day)[2];

        // 計算陣列中的日期格式資料對應到星期幾 挑出星期日以及星期六
        $what_day = date("w", strtotime($day));
        if ($what_day == 0 || $what_day == 6) {
            // 如果資料內的月份不等於 該月的月份
            if (date("Y-m", strtotime($day)) != date("Y-m", $firstday_stemp)) {
                echo "<div class = 'inner holiday test'>$data</div>";
            } else {
                echo "<div class = 'inner holiday'>$data</div>";
            }
        } else {
            // 如果資料內的月份不等於 該月的月份
            if (date("Y-m", strtotime($day)) != date("Y-m", $firstday_stemp)) {
                echo "<div class = 'inner test'>$data</div>";
            } else {
                echo "<div class = 'inner'>$data</div>";
            }
        }
    }

    ?>
</body>

</html>