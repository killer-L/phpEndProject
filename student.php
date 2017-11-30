<?php
require_once 'base.php';
require_once 'init.inc.php';
require_once 'conn.php';
$r = mysql_query("select * from student");
$ary=array();
while ($row=mysql_fetch_array($r)){
    $ary[]=$row;
}
$smarty->assign("ary",$ary);
$smarty->display("student.tpl");
?>