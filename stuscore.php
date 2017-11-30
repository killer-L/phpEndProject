<?php
include 'base.php';
header("Content-type:text/html;charset=utf-8");
if (isset($_POST['submit'])){
    include 'init.inc.php';
    include 'conn.php';
    $studentId = $_POST['studentId'];
    $r = mysql_query("select * from score where studentId='$studentId'");
        $ary=array();
        while ($row=mysql_fetch_array($r)){
            $ary[]=$row;
        }
        $smarty->assign("ary",$ary);
        $smarty->display("stuscore.tpl");
}else{
    echo '<script>alert("请先输入学号");location.href="index.php";</script>';
    
}
?>