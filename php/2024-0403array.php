<?php
$score = [];

$score["math"] = [
    ["name" => "aa", "score" => 100],
    ["name" => "bb", "score" => 90],
    ["name" => "cc", "score" => 80]
];
$score["chinese"] = [
    ["name" => "aa", "score" => 90],
    ["name" => "bb", "score" => 80],
    ["name" => "cc", "score" => 70]
];
$score["history"] = [
    ["name" => "aa", "score" => 80],
    ["name" => "bb", "score" => 70],
    ["name" => "cc", "score" => 60]
];

// 查詢名為 "bb" 的學生的數學成績。
// foreach ($score["math"] as $data) {
//     if ($data["name"] == "bb") {
//         echo $data["score"];
//     }
// }

// 取得所有數學成績高於 80 分的學生名字，並印出來。

foreach ($score as $sjb => $data) {
    if ($sjb == "math") {
        foreach ($data as $key => $result) {
            if ($result["score"] > 80) {
                echo $result["name"] . "<br>";
            }
        }
    }
}

echo "test";