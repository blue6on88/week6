<?php
$sName = $_POST["sName"];
$sDept = $_POST["sDept"];
$myfile = $_FILES["myfile"]["name"];
 
$ext = pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);
$upname = time().".".$ext;
echo $upname;
// if(copy(($_FILES["myfile"]["tmp_name"]),$upname)){
//     echo "檔案上傳成功"; 
// }

//連結資料庫
$link = @mysqli_connect('localhost','root','','school');

//SQL語法
$sql = "INSERT INTO sstudent(sNo,sDept,sPictrue) VALUES('$sName','$sDept','$upname')";
//送出查詢
if($result = mysqli_query($link,$sql)){
    echo "<br/>新增成功";
}
echo "<br/><a href = 'testtt.php'>查看資料庫</a>";


mysqli_close($link);

?>