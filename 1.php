<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>
<h3>sql查詢結果</h3>
<?php
// 設置一個空陣列來放資料
$datas = array();
// sql語法存在變數中
$sql = "SELECT `account`, `name` FROM `user` AS userData WHERE `id`=1 ";

// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);
