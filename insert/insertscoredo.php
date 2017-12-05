<?php
require_once '../conn.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$studentId = $_REQUEST ['sid'];
$subject = $_REQUEST ['km'];
$mark = $_POST ['mark'];
$sql1 = "select subjectId from subject where subject='$subject'";
$result = mysql_query($sql1);
if(mysql_num_rows($result)>0){
	

while($row = mysql_fetch_array($result)){
	$subjectId=$row['subjectId'];
}
}


	$sql = "insert score set studentId ='$studentId',subjectId = '$subjectId',mark = '$mark' ";
	if (mysql_query ( $sql )) {
		echo "添加成功！！！<br/>";
		echo "<a href='../score.php'>回到主页</a>";
	} else {
		echo "添加失败！！！<br/>";
		echo "<a href='../score.php'>系统错误</a>";
	}

