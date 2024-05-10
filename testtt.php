<meta charset="utf8">
<?php
//連結資料庫
$link = @mysqli_connect('localhost','root','','school');
if(!$link){
    die("失敗");
}
else{
    echo "成功</br>";
}
//SQL語法
$sql = "SELECT * FROM sstudent";
//送出查詢
$result = mysqli_query($link,$sql);
//結果轉陣列
echo "<table border = '1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["sName"]."</td><td>".$row["sDept"]."</td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a>"."</td><td><a href = 'update.php?No=".$row["No"]."'>修改</a></td><td>".$row["sPictrue"]."</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>   
