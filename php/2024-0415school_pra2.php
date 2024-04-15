<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pra2</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        table {
            border: solid;
            width: 50%;
            text-align: center;
        }

        tr {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>99乘法表</h1>
    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {

            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                $c = $i * $j;
                echo "<td> $j X $i = $c </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <hr>

    <table>
        <tr>
            <th>&nbsp;</th>

            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th> $i </th>";
            }
            echo "</tr>";
            ?>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                echo "<td> $i </td>";
                for ($j = 1; $j <= 9; $j++) {
                    $c = $i * $j;
                    echo "<td> $c </td>";
                }
                echo "</tr>";
            }
            ?>
    </table>
    <hr>
    <?php
    echo "<table>";
    for ($i = 0; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 9; $j++) {
            $c = $i * $j;
            if (($i == 0 && $j == 0) || $i !== 0 && $j > $i) {
                echo "<td></td>";
            } else if ($j == 0) {
                echo "<td> $i </td>";
            } elseif ($i == 0) {
                echo "<td> $j </td>";
            } else {
                echo "<td> $c </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <hr>

    <h2>尋找字元(使用while)</h2>

    <ul>
        <li> 給定一個字串句子

        </li>
        <li>
            給定一個單字或字母
        </li>
        <li>尋找相符的內容
            印出尋找到的單字或字母所在句子中的位置
        </li>
    </ul>
    <p>例:伊朗13日深夜起，朝以色列發射超過300架無人機及飛彈，最終只釀成以國輕微損失，甚至99％目標都遭到攔截。</p>
    <?php
    $str = "伊朗13日深夜起，朝以色列發射超過300架無人機及飛彈，最終只釀成以國輕微損失，甚至99％目標都遭到攔截。";

    $target = "以色列";
    $postion = 0;

    while ($target != mb_substr($str, $postion, mb_strlen($target))) {

        $postion += 1;
    }
    echo "以色列在原字串的第 $postion 個字";

    echo mb_strpos($str, $target);
    ?>

    <!--
        直角三角型
        倒直角三角型
        正三角型
        菱型
        矩形
        內含對角線的矩形 
    -->
    <h2>直角三角形</h2>
    <?php
    $str = "*";
    $str2 = " ";
    $max = 5;
    $row = 1;
    $col = 1;
    for ($row = 1; $row <= $max; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $str;
        }
        echo "<br>";
    }
    ?>
    <h2>倒直角三角形</h2>
    <?php
    $str = "*";
    $row = 1;
    $rowmax = 5;
    while ($row <= $rowmax) {
        $col = 5;
        while ($col >= $row) {
            echo $str;
            $col = $col - 1;
        }
        echo "<br>";
        $row = $row + 1;
    }
    ?>
    <h2>正三角型</h2>
    <?php
    $str = "*";
    $row = 1;
    $colmax = 9;
    $rowmax = 5;
    while ($row <= $rowmax) {
        $col = 1;
        while ($col <= $colmax) {
            $center = ceil($colmax / 2);
            $left = $center - $row;
            $right = $center + $row;
            if ($col > $left && $col < $right) {
                echo $str;
            } else {
                echo "&nbsp";
            }
            $col += 1;
        }
        echo "<br>";
        $row += 1;
    }
    ?>
    <h2>菱型</h2>
    <?php
    $str = "*";
    $space = "&nbsp;";
    $rowmax = 9;
    $colmax = 9;
    $row = 1;
    while ($row <= $rowmax) {
        $col = 1;
        $rowcenter = ceil($rowmax / 2);
        if ($row < $rowcenter) {
            while ($col <= $colmax) {
                $colcenter = ceil($colmax / 2);
                $left = $colcenter - 1;
                $right = $colcenter + 1;
                if ($col > $left && $col < $right) {
                    echo $str;
                } else {
                    echo $space;
                }
                $col += 1;
            }
        }
        echo "<br>";
        $row += 1;
    }
    ?>

    <h2>矩形</h2>
    <?php
    ?>
    <h2>內含對角線的矩形</h2>
    <?php
    ?>

</body>

</html>