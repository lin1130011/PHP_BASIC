<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";

$pdo = new PDO($dsn, 'root', 'k8b2c9uq', []);

$sql = "SELECT * FROM `student`";

$row = $pdo->query($sql);

$row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($row);
