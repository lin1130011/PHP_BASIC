<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            text-align: center;
        }

        table {
            width: 500px;
            height: 500px;
            border: 2px double darkblue;
            border-collapse: collapse;
            margin: auto;
            text-align: center;


        }

        th,
        td {
            border: 1px solid;
        }
    </style>
</head>
<?php
// 設定初始年分
$year = "2024";
// 設定月份
$month = "4";
// 查詢該月份第一天是星期幾 "第一周的第一天是星期幾"
$firstweek_firstday_timestamp = strtotime("$year-$month-01"); //建立第一周第一天的時間戳
$firstweek_firstday = date("w", $firstweek_firstday_timestamp);    // 使用date("w",$firstweek_firstday)來查詢該時間戳是對應星期幾
// 查詢該月份有幾天
$days_in_month = date("t", $firstweek_firstday_timestamp);
// echo $days_in_month;

// 開始建立表格
// 製作表頭
echo "<h2>" . date("Y年 n月", $firstweek_firstday_timestamp) . "</h2>";
$str = "日 一 二 三 四 五 六";
$header = explode(" ", $str);
echo "<table>";
foreach ($header as $key => $value) {
    echo "<th> $value </th>";
}
// 製作表格內容
$days_count = 1; //日期計數器 用來從第一天 算到該月份最後一天
//$i 代表有幾周 目前設定為 總共六周
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    //$j 代表周日~周六 分別為 0 1 2 3 4 5 6 所以從0開始 0代表周日
    for ($j = 0; $j < 7; $j++) {
        //如果$i 為第一周 且 $j 小於月份第一周的第一天 則表格內不增加內容
        if ($i == 1 && $j < $firstweek_firstday) {
            echo "<td></td>";
        } else {
            //如果日期計數器 小於等於 該月份的總天數 則表格內印出計算器的數字 相當於該月份的日期 
            if ($days_count <= $days_in_month) {
                echo "<td> $days_count </td>";
                $days_count += 1;
                //不符合以上條件時 例如到了第五周 該月份就已經結束 為了避免表格內容被壓扁 所以塞了一個空白字符 避免第六行沒有任何資料的情況下 表格壓縮
            } else {
                echo "<td>&nbsp;</td>";
            }
        }
    }
    echo "</tr>";
}
?>

<body>

</body>

</html>