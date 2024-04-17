<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <<h2>菱形</h2>

        <?php
        // 整個菱形的高度 也就是最高行高 也可以等於最寬的寬度 
        $stars = 7;
        // 確保$odd一定為奇數 如果$star 可以被二整除 ? 則$strar + 1 就是偶數變為奇數 如果不能: 則$odd = $star
        $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
        // $mid為整個菱形中心行的位置 也就是星星最多 最寬的那一行
        $mid = (($odd + 1) / 2) - 1;

        // 外部迴圈 決定整個菱形的高度 也就是 如果$i 小於 $star $i會不斷+1 以此為例 $star為7 $i從0..7 所以$i的變數會依次為 0 1 2 3 4 5 6 代表有七行
        for ($i = 0; $i < $stars; $i++) {
            // 如果行數$i 小於或等於中心行 則將行數$i 暫存在 變數$tmp中 $tmp在這個範例中 會有 0123
            if ($i <= $mid) {
                $tmp = $i;
            } else {
                // $tmp--;
                // 如果行數$i 大於中心行 則暫存變數$tmp 會逐步減去1 也就是 2 1 0 -1
                $tmp = $tmp - 1;
            }
            // 內部迴圈: 印出空格的條件 當列數$k 小於(中心行減去暫存行數後的值) 逐步印出空白
            for ($k = 0; $k < $mid - $tmp; $k++) {
                echo "&nbsp;";
            }
            // 內部迴圈: 印出*號的條件 當列數$j 大於暫存行數 $tmp * 2 + 1 則逐步列印 *號
            for ($j = 0; $j < $tmp * 2 + 1; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>


</body>

</html>