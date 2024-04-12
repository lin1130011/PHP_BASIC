<h2>for loop</h2>
<?php
echo "<table>";

// for迴圈基礎

for ($a = 1; $a <= 9; $a++) {
    $b = 1;

    for ($b; $b <= 9; $b++) {
        $c = $a * $b;
        echo "<td> $b * $a = $c </td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
<hr>

<h2>while/do..while loop</h2>
<?php
$score = 10;
$count = 1;
while ($score < 60) {

    echo "第 $count 次進入迴圈時score: $score <br>";
    $score = $score + 10;
    echo "計算後的score : $score <br>";
    $count++;
}
echo "score最後的值為: $score 不符合條件 不再進入迴圈";
?>
<hr>

<h2>foreach</h2>
<?php
$score = [60, 22, 72, 10, 80];
/*
相當於
1:
$score = []; $score變數設定為一個空陣列
$score[0] = 60;
$score[1] = 22;
$score[2] = 72;
$score[3] = 10;
$score[4] = 80;
也相當於
$score = [
  $key  $value
    0 => 60,
    1 => 22,
    2 => 72,
    3 => 10,
    4 => 80
]
*/
?>
<hr>

<h2>巢狀結構</h2>
<?php
// 設變數max為迴圈的最大值
$max = 20;
for ($i = 0; $i <= $max; $i++) {
    echo $i * 10;

    // 如果變數i達到迴圈最大值的一半才執行
    if ($i == intval($max / 2)) {
        echo "執行一半了";
    }
    echo "<br>";
}
?>