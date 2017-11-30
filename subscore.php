<?php
include 'base.php';
header("Content-type:text/html;charset=utf-8");
if (isset($_REQUEST['submit'])){
    include 'init.inc.php';
    include 'conn.php';
    $studentId = $_POST['studentId'];
    //通过学号查学生姓名
    $r1=mysql_query("select name from student where studentId='$studentId'");
    while($row=mysql_fetch_array($r1)){
        $name=$row['name'];
    }
    $smarty->assign("name",$name);
    //通过科目名称查出科目编号
    $subject = $_REQUEST['subject'];
    $result=mysql_query("select subjectId from subject where subject='$subject'");
    while($row=mysql_fetch_array($result)){
        $subjectId=$row['subjectId'];
    }
    //通过科目编号查出学生成绩
     $r = mysql_query("select * from score where subjectId='$subjectId'");
     $smarty->assign("subject",$subject);
    
    if ($row = mysql_fetch_array($r)){
        $smarty->assign("studentId",$row['studentId']);
        $smarty->assign("mark",$row['mark']);
        $smarty->display("subscore.tpl");
    }else{
        echo '<script>alert("查无此人");location.href="index.php";</script>';
    } 
} else{
  echo '<script>alert("请先输入学号");location.href="index.php";</script>';
    }  
?>