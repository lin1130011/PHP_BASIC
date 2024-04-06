<?php

$serve_name = "localhost";
$user_name = "student";
$password = "ggc68123";
$db_name = "learn";

try {
    $con = new PDO("mysql:host=$serve_name;dbname=$db_name", $user_name, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 從表單中獲取提交的數據
        $name = $_POST['name'];
        $number = $_POST['number'];
        $score = $_POST['score'];

        // 構建 SQL 插入語句
        $sql = "INSERT INTO mathscore (name, number, score) VALUES ('$name', '$number', '$score')";

        // 執行 SQL 插入語句
        $con->exec($sql);

        echo "新記錄插入成功";
    } else {
        echo "FALSE";
    }
} catch (PDOException $e) {
    echo "錯誤: " . $e->getMessage();
}
