<?php
require_once '../conn.php';
header ( "content-type:text/html;charset=utf-8" );

$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$sex = $_REQUEST ['sex'];

$sql = "update student set studentId ='$studentId',name = '$name',className = '$className',sex ='$sex' where id = $id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	echo "<a href='../student.php'>回到主页</a>";
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='../student.php'>系统错误</a>";
}