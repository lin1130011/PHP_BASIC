<?php
// 指定要顯示的年份和月份
$year = 2024;
$month = 4;

// 設定這個月的第一天的日期字串
$date_string = date("Y-m-d", strtotime("$year-$month-01")); // 格式化成年-月-日的日期字串

// 確定這個月的天數
$days_in_month = date("t", strtotime($date_string)); // 取得這個月的天數

// 輸出月曆的標題
echo "<h2>" . date("F Y", strtotime($date_string)) . "</h2>"; // 以 "月份 年份" 的格式顯示月曆標題

// 輸出月曆表格的開始標籤
echo "<table border='1'>";

// 輸出表頭，顯示星期幾
echo "<tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr>";

// 開始填充月曆內容的第一行
echo "<tr>";

// 第一個迴圈：
// $i = 0; 初始化索引變數，從第一個單元格開始。
// date("w", strtotime($date_string)) 取得指定日期的星期幾（0 表示星期日，1 表示星期一，以此類推）。
// $i < date("w", strtotime($date_string)) 迴圈條件是確保填充空白單元格的數量足夠，以確保每個月份的第一天能夠對應到正確的星期位置。
// echo "<td></td>"; 輸出一個空的表格單元格，填充月曆的第一行。
for ($i = 0; $i < date("w", strtotime($date_string)); $i++) {
    echo "<td></td>"; // 輸出空的表格單元格
}

// 第二個迴圈：
// $day = 1; 初始化日期變數，從月份的第一天開始。
// $day <= $days_in_month; 迴圈條件是確保日期不超過這個月的總天數。
// echo "<td>$day</td>"; 輸出日期。
// date("w", strtotime("$year-$month-$day")) == 6 判斷當前日期是否是星期六。
// echo "</tr><tr>"; 如果是星期六，則換行，開始新的一行。
for ($day = 1; $day <= $days_in_month; $day++) {
    echo "<td>$day</td>"; // 輸出日期

    if (date("w", strtotime("$year-$month-$day")) == 6) {
        echo "</tr><tr>"; // 換行
    }
}

// 輸出表格的結束標籤
echo "</tr></table>";
