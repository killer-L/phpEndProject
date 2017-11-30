<?php
require_once 'base.php';
require_once '../init.inc.php';
if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:../login.php");
}
$userName = $_SESSION['userName'];

require_once '../conn.php';
if (! isset($_REQUEST['id'])) {
    header("location:../index.php");
}
$id = $_REQUEST['id'];
$sql = "select * from subject where id = $id";
$result = mysql_query($sql);
$ary = array();
while ($row=mysql_fetch_array($result)){
    $ary[]=$row;
}
$smarty->assign("ary",$ary);
$smarty->display("editsubject.tpl");
?>