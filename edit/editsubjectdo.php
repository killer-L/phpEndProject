<?php
require_once '../conn.php';
header ( "content-type:text/html;charset=utf-8" );

$id = $_REQUEST ['id'];
$subjectId = $_REQUEST ['subjectId'];
$subject = $_REQUEST ['subject'];


$sql = "update subject set subjectId = '$subjectId',subject ='$subject' where id = $id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	echo "<a href='../subject.php'>回到主页</a>";
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='../subject.php'>系统错误</a>";
}