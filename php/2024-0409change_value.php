<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>交換前</h1>
        $a = 10;<br>
        $b = 50;<br>
    </div>
    <hr>
    <div>
        <h1>交換後</h1>
    </div>
    <?php
    $a = 10;
    $b = 50;

    $tmp = $a;
    $a = $b;
    $b = $tmp;

    echo '$a = ' . $a;
    echo "<br>";
    echo '$b = ' . $b;
    echo "<hr>";

    // 判斷成績及格學生
    // 給定一個成績數字，判斷是否及格(60)分
    $score = 110;

    $level = ($score >= 60) ? "及格" : "不及格";
    echo "第一種方法 成績為 : " . $score;
    echo "<br>";
    echo "是否及格:" . $level;
    if ($score >= 60) {
        $level = "及格";
    } else {
        $level = "不及格";
    }
    echo "<hr>";
    echo "第二種方法 成績為 : " . $score;
    echo "<br>";
    echo "是否及格:" . $level;
    echo "<hr>";

    // 使用if ...else來得到成績的等級
    /*
    100~90 => A
    89~80 => B
    79~70 => C
    69~60 => D
    60~0 => E
    */
    if ($score >= 0 && $score < 60) {
        $grade = "E";
    } else if ($score >= 60 && $score < 70) {
        $grade = "D";
    } else if ($score >= 70 && $score < 80) {
        $grade = "C";
    } else if ($score >= 80 && $score < 90) {
        $grade = "B";
    } else if ($score >= 90 && $score <= 100) {
        $grade = "A";
    } else {
        echo "成績範圍不合理 請輸入0~100的數字";
        $grade = "成績錯誤";
    }




    /*
    分配成績等級
    給定一個成績數字，根據成績所在的區間，給定等級
    0 ~ 59 => E
    60 ~ 69 => D
    70 ~ 79 => C
    80 ~ 89 => B
    90 ~ 100 => A
    */

    /*
    $student_score = 0;

    switch ($student_score) {
        case ($student_score >= 0 && $student_score < 60):
            $grade = "E";
            echo $grade;
            break;
        case ($student_score >= 60 && $student_score < 70):
            $grade = "D";
            echo $grade;
            break;
        case ($student_score >= 70 && $student_score < 80):
            $grade = "C";
            echo $grade;
            break;
        case ($student_score >= 80 && $student_score < 90):
            $grade = "B";
            echo $grade;
            break;
        case ($student_score >= 90 && $student_score <= 100):
            $grade = "A";
            echo $grade;
            break;

        default:
            echo "你老0分!?";
            break;
    }
    echo "<br>";
    echo "學生表現 : ";
     */

    if ($grade == "A") {
        echo "表現優良，請繼續保持";
    } else if ($grade == "B") {
        echo "值得肯定，還有進步空間";
    } else if ($grade == "C") {
        echo "需要更多的練習";
    } else if ($grade == "D") {
        echo "需要加強基本功";
    } else if ($grade == "E") {
        echo "是否無心學業?";
    }
    echo "<br>";
    echo "<hr>";
    switch ($grade) {
        case 'A':
            $words = "表現優良，請繼續保持";
            break;
        case 'B':
            $words = "值得肯定，還有進步空間";
            break;
        case 'C':
            $words = "需要更多的練習";
            break;
        case 'D':
            $words = "需要加強基本功";
            break;
        case 'E':
            $words = "是否無心學業?";
            break;

        default:
            $words = "你在開玩笑嗎";
            break;
    }

    echo "你的成績為 : " . $score . "<br>";
    echo "表現評語 : " . $words;
    ?>
</body>

</html>