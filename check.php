<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbconn.php");
session_start();
$uID = isset($_POST['account'])?htmlspecialchars($_POST['account'],ENT_QUOTES):"";
$uPW = isset($_POST['password'])?sha1(htmlspecialchars($_POST['password'],ENT_QUOTES)):"";
$sql = "SELECT * passwd FROM users WHERE `email` = '".$uID."';";

$rs = mysqli_query($conn,$sql);
if($rs !=null) {
    $rowCount = mysqli_num_rows($rs);
    $row = $rs->fetch_row();
    if($rowCount == 1 && $uPW = $row[0]){
        $_SESSION['username'] = $uID;
        echo'<h3 align=center>成功登入<h3>';
        echo'<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
    }else{
        echo "<center>Incorrect!!<br/>";
        echo "Return to <a href=\"index.html\">Login</a></center>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
        exit();
    }
}else{
    echo "<center>Incorrect!!<br/>";
    echo "Return to <a href=\"index.html\">Login</a></center>";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
    exit();
}
?>

// $id = $_POST['account'];
// $pw = $_POST['password'];
// if ( strcmp($id, "abc")==0 && strcmp($pw,"123")==0){
//     header("Location: main.php",true,301 );
//     exit();
// }else{
// echo"<h1>you have no permission to enter the system!!</h1>";
// }