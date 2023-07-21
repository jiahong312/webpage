<?php
$dbserver = rtrim("locolhost");
$dbname = rtrim("testdb");
$dbuser = rtrim("root");
$dbUPW = rtrim("0312red0312");

$conn = new mysqli($dbserver,$dbuser,$dbUPW);
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

mysqli_query($conn,"SET NAMES utf8");

$db_selected =mysqli_select_db($conn,$dbname);
if (!$db_selected) {
    die ('無法使用資料庫 (Can not use Database!!)'  . mysql_error());
}