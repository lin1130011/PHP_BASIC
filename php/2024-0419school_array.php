<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習</title>
    <style>
        tr,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php

    $a = ['A', 'B', 'C'];
    $b = ['name' => 'maggie', 'hight' => 160];
    echo serialize($a);
    echo "<hr>";
    echo serialize($b);
    echo "<hr>";
    $watch = implode("-", $a);
    echo $watch;
    echo "<br>";
    $look = explode("-", $watch);
    print_r($look);
    ?>
    <h2>利用程式來產生陣列</h2>


    <ul>

        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>

    </ul>
    <?php
    $ninenine = [];
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $ninenine[] = "$i * $j = "  . ($i * $j) . ",  ";
        }
    }
    // $count = 1;
    // foreach ($ninenine as $value) {
    //     echo $value;
    //     if ($i % 9 == 0) {
    //         echo "<br>";
    //     }
    //     $i++;
    // }
    foreach ($ninenine as $key => $value) {
        echo $value;
        if (($key + 1) % 9 == 0) {
            echo "<br>";
        }
    }
    ?>
    <hr>
    <br>
    <table>
        <?php
        foreach ($ninenine as $key => $value) {
            if ($key  % 9 == 0) {
                echo "<tr>";
            }
            echo "<td> $value </td>";
        }
        if (($key + 1) % 9 == 0) {
            echo "<tr/>";
        }
        ?>
    </table>
    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <?php
    echo "<h2> while loop </h2>";
    // 最小值
    $a = 1;
    // 最大值
    $b = 38;

    $watch = [];

    // 要抽取6個不重複數字
    while (count($watch) < 6) {
        $tmp = rand($a, $b);
        if (in_array($tmp, $watch)) {
        } else {
            $watch[] = $tmp;
        }
    }
    foreach ($watch as $key => $value) {
        echo $value . ",";
    }

    echo "<h2>for loop</h2>";
    $look = [];
    for ($i = 0; $i < 6; $i++) {
        $tmp = rand($a, $b);
        if (in_array($tmp, $look)) {
        } else {
            $look[] = $tmp;
        }
    }
    foreach ($look as $key => $value) {
        echo $value . ",";
    }
    ?>
    <h2>找出五百年內的閏年</h2>

    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
    <?php
    $year = 2024;
    $final_year = $year + 500;
    $result = [];
    while ($year <= $final_year) {
        if (($year % 4 == 0 && $year % 100 !== 0) ||  $year % 400 == 0) {
            $result[] = $year;
        } else {
        }
        $year += 1;
    }
    foreach ($result as  $year) {
        echo "$year 是 閏年 <br>";
    }
    echo "共有" . count($result) . "個閏年";
    ?>
    <h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈) </h2>

    <ul>
        <li>天干：甲乙丙丁戊己庚辛壬癸</li>
        <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
        <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
    </ul>
    <?php
    // 西元年除以天干數量(10) 餘數4為甲 餘數5為乙 依此類推 
    $sky = [
        4 => "甲",
        5 => "乙",
        6 => "丙",
        7 => "丁",
        8 => "戊",
        9 => "己",
        0 => "庚",
        1 => "辛",
        2 => "壬",
        3 => "癸"
    ];
    // 西元年除以地支數量(12) 餘數4為子 餘數5為丑 依此類推 

    $land = [
        4 => "子",
        5 => "丑",
        6 => "寅",
        7 => "卯",
        8 => "辰",
        9 => "巳",
        10 => "午",
        11 => "未",
        0 => "申",
        1 => "酉",
        2 => "戌",
        3 => "亥"
    ];
    $year = 2025;
    $sky_item = $sky[$year % 10];
    $land_item = $land[$year % 12];
    echo "$year 是 $sky_item$land_item 年";
    ?>
</body>

</html>