
<?php
require_once '../conn.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "delete from subject where id=$id";
//exit($sql);
if (mysql_query ( $sql )) {
    echo "<script>alert('删除成功！');</script>";
    echo "删除成功！！！<br/>";
    echo "<a href='../subject.php'>回到主页</a>";
} else {
    echo "<script>alert('删除失败！');</script>";
    echo "删除失败！！！<br/>";
    echo "<a href='../subject.php'>回到主页</a>";
}