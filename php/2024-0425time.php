<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {

            border-collapse: collapse;
            border: 3px blue solid;
        }

        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
    $day11 = "2024-1-1";
    $day22 = "2024-2-1";

    $day1 = strtotime($day11);
    $day2 = strtotime($day22);

    echo "$day11 與 $day22 相差了" . ($day2 - $day1) / (60 * 60 * 24) . "天";
    ?>

    <h2>計算距離自己下一次生日還有幾天</h2>
    <?php
    $this_year = date("Y");
    $today = date("Y-m-d");
    $birthday = "1995-11-16";
    $next_birthday = str_replace(mb_substr($birthday, 0, 4), $this_year, $birthday);
    if (strtotime($next_birthday) < strtotime($today)) {
        $next_year = $this_year + 1;
        $next_birthday = str_replace(mb_substr($birthday, 0, 4), $next_year, $birthday);
    }
    $next_birthday = strtotime($next_birthday);
    $today = strtotime($today);
    $diff = abs($today - $next_birthday);
    echo "距離下次生日還剩下" . floor($diff / (60 * 60 * 24)) . "天";
    ?>
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
    <?php
    // 2021/10/05
    $data = date("Y-m-d");
    $time = strtotime($data);
    $watch = date("Y/m/d");
    echo $watch . "<br>";

    // 10月5日 Tuesday
    $watch = date("m月d日 l");
    echo $watch . "<br>";

    // 2021-10-5 12:9:5
    $watch = date('Y-m-j H:' . (int)(date("i")) . ":" . (int)(date("s")));
    echo $watch . "<br>";

    // 2021-10-5 12:09:05
    $watch = date("Y-m-j H:i:s");
    echo $watch . "<br>";

    // 今天是西元2021年10月5日 上班日(或假日)
    $watch = date("Y年m月j日");

    $workday = (date("N") < 6) ? "工作日" : "假日";

    echo "今天是西元$watch 是$workday";
    ?>
    <h2>
        利用迴圈來計算連續五個周一的日期
    </h2>

    <ul>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ul>
    <?php
    $monday = "2024-04-23"; // 起始日期
    $week = [
        1 => "星期一",
        2 => "星期二",
        3 => "星期三",
        4 => "星期四",
        5 => "星期五",
        6 => "星期六",
        7 => "星期日"
    ];
    for ($i = 0; $i < 5; $i++) {
        $next_monday = strtotime("+$i week", strtotime($monday));
        echo date("Y-m-d", $next_monday) . $week[date("N", $next_monday)] . "<br>";
    }
    ?>
    <h2>線上月曆製作</h2>

    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>
    <?php
    $str = "日 一 二 三 四 五 六";
    $arr = explode(" ", $str);
    $year = "2024";
    $month = 12;
    $firstwekk_firstday = date("$year-$month-01");
    $firstwekk_firstday_steamp =  strtotime($firstwekk_firstday);
    $firstwekk_firstday = date("w", $firstwekk_firstday_steamp);
    $days_in_month = date("t", $firstwekk_firstday_steamp);
    $days_count = 1;

    echo "<h2>" . date("Y年 : ") . "$month 月" . "</h2>";
    echo "<table>";
    echo "<tr>";
    foreach ($arr as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 7; $j++) {
            // ($j-1)的解釋為 根據表頭順序為日 一 二 三 四 五 然而$j也就是列數的排序是 1 2 3 4 5 6 7 然而$firstweek_firstday取得的內容為0~6(對應星期日到六) 所以須將列述減去1格確保起始點
            // 或者修改迴圈條件for ($j = 0; $j < 7; $j++)
            if ($i == 1 && ($j - 1) < $firstwekk_firstday) {
                echo "<td> </td>";
            } else {
                if ($days_count <= $days_in_month) {
                    echo "<td>$days_count</td>";
                    $days_count += 1;
                } else {
                    echo "<td>&nbsp;</td>";
                }
            }
        }
        echo "</tr>";
    }
    ?>

</body>

</html>