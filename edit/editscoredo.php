<?php
require_once '../conn.php';
header ( "content-type:text/html;charset=utf-8" );

$id = $_POST['id'];
$studentId = $_POST['studentId'];
$subjectId = $_POST['subjectId'];
$mark = $_POST['mark'];


$sql = "update score set studentId = '$studentId',subjectId ='$subjectId',mark='$mark' where id = $id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	echo "<a href='../score.php'>回到主页</a>";
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='../score.php'>系统错误</a>";
}