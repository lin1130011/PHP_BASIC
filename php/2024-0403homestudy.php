<?php
$subject = [];


$subject["math"] = [
    ["name" => "lin", "score" => 100],
    ["name" => "celine", "score" => 90],
    ["name" => "chan", "score" => 80],
    ["name" => "wang", "score" => 70]
];
$subject["history"] = [
    ["name" => "lin", "score" => 90],
    ["name" => "celine", "score" => 80],
    ["name" => "chan", "score" => 70],
    ["name" => "wang", "score" => 60]
];
$subject["chinese"] = [
    ["name" => "lin", "score" => 80],
    ["name" => "celine", "score" => 70],
    ["name" => "chan", "score" => 60],
    ["name" => "wang", "score" => 50]
];

//測試
$student_name = "celine";
$subject_name = "history";

// 編寫一個函式 getSubjectScore($subject, $student_name, $subject_name)，該函式接受三個參數：

// $subject：包含了科目成績的陣列。
// $student_name：要查找成績的學生名字。
// $subject_name：要查找的科目名稱。
// 該函式應該返回指定學生在指定科目的成績。
// 請在程式中調用該函式並輸出結果，以驗證其正確性。

// 一種寫法
// function getSubjectScore($subject, $student_name, $subject_name)
// {
//     foreach ($subject[$subject_name] as $data) {
//         if ($data["name"] == $student_name) {
//             return $student_name . " score is " . $data["score"];
//         }
//     }
//     return "not found";
// }

// 第二種寫法
// function getSubjectScore($subject, $student_name, $subject_name)
// {
//     foreach ($subject as $subject_name => $data) {
//         foreach ($data as $data_score) {
//             if ($data_score["name"] == $student_name) {
//                 return $student_name . " score is " . $data_score["score"];
//             }
//         }
//     }
//     return "not found";
// }



// echo getSubjectScore($subject, $student_name, $subject_name);

// 編寫一個名為 calculateTotalScore 的函式，該函式接受兩個參數：
// $subject：包含了學生成績資料的陣列。
// $student_name：要計算總成績的學生名字。
// 計算特定學生的總成績（所有科目的成績總和）並返回結果。
// 如果提供的學生名字不存在，請返回 0。
// 請完成上述任務，並且提供您的解決方案

// function calculateTotalScore($subject, $student_name)
// {
//     foreach ($variable as $key => $value) {
//         # code...
//     }
// }

// 編寫一個函式 getSubjectStudents，接受一個科目名稱作為參數。
// 函式應該返回指定科目中的所有學生名字。
// 如果指定科目不存在或該科目沒有任何成績資料，請返回空陣列。
// 請完成上述任務，並且提供您的解決方案。

// echo getSubjectStudents($subject, $subject_name);

// function getSubjectStudents($subject, $subject_name)
// {
//     foreach ($subject[$subject_name] as $data) {
//         return $subject_name . " student is " . $data["name"] . "<br>";
//     }
//     return null;
// }
