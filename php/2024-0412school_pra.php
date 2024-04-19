<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課堂練習</title>

</head>

<body>
    <h2>判斷成績及格學生 給定一個成績數字，判斷是否及格(60)分</h2>
    <?php
    $score = 100;

    if ($score >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }
    ?>
    <hr>
    <h2>分配成績等級</h2>

    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    <?php
    $score = 100;
    if ($score >= 0 && $score < 60) {
        $grade = "E";
    } elseif ($score >= 60 && $score < 70) {
        $grade = "D";
    } elseif ($score >= 70 && $score < 80) {
        $grade = "C";
    } elseif ($score >= 80 && $score < 90) {
        $grade = "B";
    } elseif ($score >= 90 && $score <= 100) {
        $grade = "A";
    } else {
        $comment = "請輸入正確的資料";
    }
    // 依據學生成績等級給予評價 根據學生不同的成績等級在網頁上印出不同的文字評價
    switch ($grade) {
        case 'E':
            $comment = "是否無心學業";
            $color = "gray";
            break;
        case 'D':
            $comment = "還有很大進步空間";
            $color = "orange";
            break;
        case 'C':
            $comment = "表現普通";
            $color = "blue";
            break;
        case 'B':
            $comment = "表現尚可";
            $color = "green";
            break;
        case 'A':
            $comment = "表現優秀";
            $color = "red";
            break;
        default:
            # code...
            break;
    }
    echo "成績為 : $score 成績分級為 : $grade 評語: <span style='font-size:32px; color:$color'> $comment </span>";
    ?>
    <hr>

    <h2>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</h2>
    <ul>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    </ul>
    <?php
    $year = 2147483648;
    // 閏年標準::如果一個年份能夠被4整除，但不能被100整除，那麼它是閏年。如果一個年份能夠被4整除，並且能夠被100整除，但同時能被400整除，那麼它也是閏年。
    // if (($year % 4 == 0 && $year % 100 !== 0) ||  $year % 400 == 0) 
    if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 4 == 0  && $year % 400 == 0)) {
        $yearcomment = "閏年";
    } else {
        $yearcomment = "平年";
    }
    // 年分除以4 不可整除 或者 年分除以100可以整除而且年分除以400不可整除 為平年 (||後面的條件加上括號確認優先級別)
    // if ($year % 4 !== 0 || ($year % 100 == 0 && $year % 400 !== 0)) {
    //     $yearcomment = "平年";
    //     $color = "skyblue";
    // } elseif ($year % 4 == 0 && $year % 100 !== 0) {
    //     $yearcomment = "閏年";
    //     $color = "lightblue";
    // }
    echo "$year  年 為 : <span style='font-size:32px;color:$color'> $yearcomment </span>";
    ?>


</body>

</html>