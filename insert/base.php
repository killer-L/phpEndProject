<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
//根据当前文件名计算菜单名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">

<title>成绩管理系统</title>

<!--data table-->
<link rel="stylesheet" href="../js/data-tables/DT_bootstrap.css" />

<link href="../css/style.css" rel="stylesheet">
<link href="../css/style-responsive.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
<section>
	<!-- left side start-->
	<div class="left-side sticky-left-side">

		<!--logo and iconic logo start-->
		<div class="logo">
			<a href="index.html"><img src="../images/logo.png" alt=""></a>
		</div>

		<div class="logo-icon text-center">
			<a href="index.html"><img src="../images/logo_icon.png" alt=""></a>
		</div>
		<!--logo and iconic logo end-->

		<div class="left-side-inner">

			<!-- visible to small devices only -->
			<div class="visible-xs hidden-sm hidden-md hidden-lg">
				<div class="media logged-user">
					<img alt="" src="../images/photos/user-avatar.png"
						class="media-object">
					<div class="media-body">
						<h4>
							<a href="#"><?=$userName?></a>
						</h4>
						<span>"Hello There..."</span>
					</div>
				</div>

				<h5 class="left-nav-title">Account Information</h5>
				<ul class="nav nav-pills nav-stacked custom-nav">
					<li><a href="newpassword.php"><i class="fa fa-cog"></i> <span>修改密码</span></a></li>
					<li><a href="loginout.php"><i class="fa fa-sign-out"></i> <span>退出登录</span></a></li>
				</ul>
			</div>

			<!--sidebar nav start-->
			<ul class="nav nav-pills nav-stacked custom-nav">
				<li><a href="../index.php"><span> 首页</span></a></li>
				<li><a href="../student.php"><span> 学生信息</span></a></li>
				<li><a href="../score.php"> 成绩管理</a></li>
				<li><a href="../subject.php"> 科目管理</a></li>
			</ul>
			<!--sidebar nav end-->

		</div>
	</div>
	<!-- left side end-->

	<!-- main content start-->
	<div class="main-content">

		<!-- header section start-->
		<div class="header-section">

			<!--toggle button start-->
			<a class="toggle-btn"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--search start-->
			<form class="searchform" action="index.html" method="post">
				<input type="text" class="form-control" name="keyword"
					placeholder="Search here..." />
			</form>
			<!--search end-->

			<!--notification menu start -->
			<div class="menu-right">
				<ul class="notification-menu">

					<li><a href="#" class="btn btn-default dropdown-toggle"
						data-toggle="dropdown"> <img src="../images/photos/user-avatar.png"
							alt="" /> <?=$userName?> <span class="caret"></span>
					</a>
						<ul class="dropdown-menu dropdown-menu-usermenu pull-right">
							<li><a href="newpassword"><i class="fa fa-cog"></i> 修改密码</a></li>
							<li><a href="loginout.php"><i class="fa fa-sign-out"></i> 退出登录</a></li>
						</ul></li>

				</ul>
			</div>
			<!--notification menu end -->

		</div>
		<!-- header section end-->