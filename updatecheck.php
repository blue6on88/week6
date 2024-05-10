<?php
$No = $_POST["uNo"];
$sName = $_POST["uName"];
$sDept = $_POST["uDept"];

//連結資料庫
$link = @mysqli_connect('localhost','root','','school');

//SQL語法
$sql = "UPDATE sstudent SET sName='$sName',sDept='$sDept' WHERE No= '$No'";
if($result = mysqli_query($link,$sql)){
    echo "更新成功";
}
echo "<br/><a href = 'testtt.php'>查看資料庫</a>";

?>