<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈練習</title>
    <style>
        table {
            margin: auto;
            width: 40%;
        }

        tr,
        th,
        td {
            /* border: 1px solid lightblue; */
            text-align: center;
        }

        tr {
            background-color: lightblue;
        }

        td:hover {
            background-color: red;
        }
    </style>
</head>

<body>
    <h2>使用for迴圈來產生以下的數列<br>
        1,3,5,7,9……n<br>
        10,20,30,40,50,60……n<br>
        3,5,7,11,13,17……97<br>
    </h2>
    <?php
    // 1,3,5,7,9……n

    // $max只能輸入奇數
    $max = 21;
    for ($i = 1; $i <= $max; $i = $i + 2) {
        echo $i;
        if ($i < $max) {
            echo " , ";
        }
    }
    echo "<br>";

    // 10,20,30,40,50,60……n
    $max = 70;
    for ($i = 10; $i <= $max; $i += 10) {
        echo $i;
        if ($i < $max) {
            echo " , ";
        }
    }
    echo "<br>";

    // 3,5,7,11,13,17……97
    // 定義範圍
    $max = 100;

    // 從3開始直到$max
    for ($i = 3; $i <= $max; $i++) {
        // 假設$i 為質數
        $flag = true;
        // 檢查$i 是否可以被除了1 和他自己本身以外的數整除(PS:$j的作用)
        for ($j = 2; $j < $i; $j++) {

            if ($i % $j == 0) {
                // 如果可以被整除 則設定為false;
                $flag = false;
            }
        }

        // 如果為質數 則為true
        if ($flag) {
            echo $i;
            if ($i < $max) {
                echo " , ";
            }
        }
    }
    ?>


    <hr>
    <h2>以表格排列的九九乘法表</h2>
    <table>
        <?php
        for ($a = 1; $a <= 9; $a++) {
            $b = 1;

            for ($b; $b <= 9; $b++) {
                $c = $a * $b;
                echo "<td> $b * $a = $c </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <hr>

    <h2>以交叉計算結果呈現的九九乘法表</h2>
    <table>
        <tr>
            <th>&nbsp</th>;
            <?php
            $a = 1;
            while ($a <= 9) {
                echo "<td> $a </td>";
                $a += 1;
            }
            ?>
        </tr>
        <?php
        $a = 1;
        while ($a <= 9) {
            echo "<tr>";
            echo "<td> $a </td>";
            $b = 1;
            while ($b <= 9) {
                $c = $a * $b;
                echo "<td> $c </td>";
                $b += 1;
            }
            echo "</tr>";
            $a += 1;
        }
        ?>

    </table>

    </table>
</body>

</html>
<?php

?>