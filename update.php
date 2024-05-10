<?php
$No = $_GET["No"];
// echo $No;
?>

<?php
//連結資料庫
$link = @mysqli_connect('localhost','root','','school');

//SQL語法
$sql = "SELECT * FROM sstudent WHERE No = '$No'";
if($result = mysqli_query($link,$sql)){
    $row=mysqli_fetch_assoc($result);
    $sName = $row["sName"];
    $sDept = $row["sDept"];
}
?>

<form action="updatecheck.php" method="post">

編號:<?php echo $No ?><input type="hidden" name="uNo" value="<?php echo $No ?>"><br/>
姓名:<input type="text" name="uName" value="<?php echo $sName ?>"><br/>
系所:<input type="text" name="uDept" value="<?php echo $sDept ?>"><br/>
<input type="submit">
</form>
