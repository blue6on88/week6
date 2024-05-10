<?php
$sNo = $_GET["No"];
echo $sNo;

//連結資料庫
$link = @mysqli_connect('localhost','root','','school');
if(!$link){
    die("失敗");
}
else{ 
    echo "成功</br>";
}
//SQL語法
$sql = "DELETE FROM sstudent WHERE NO='$sNo'";
//送出查詢
if($result = mysqli_query($link,$sql)){
    echo "<br/>刪除成功";
}
echo "<br/><a href = 'testtt.php'>查看資料庫</a>";


?>