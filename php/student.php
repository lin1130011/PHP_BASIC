<?php
$servername = "localhost";
$dbname = "student";
$username = "root";
$userpassword = "k8b2c9uq";

$con = new PDO("mysql:host=$servername;charset=utf8;dbname=$dbname", $username, $userpassword);

$data_name = "aa";
$data_number = 1;
$data_score = 100;

$sql = "INSERT INTO `students`(`name`, `number`, `score`) VALUES ('$data_name','$data_number','$data_score')";

$sql2 = "select * from students";

$ins = $con->query($sql);

$data = $con->query($sql2)->fetchAll(PDO::FETCH_ASSOC);

print_r($data);
