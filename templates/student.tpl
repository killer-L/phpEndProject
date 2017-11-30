<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">

<title>成绩管理</title>

<link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">

  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
</head>

<body class="sticky-header">
<div class="page-heading">
		<h3>学生信息管理</h3>

	</div>

	<div class="wrapper">
		<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						学生信息表 <span class="tools pull-right"> <a href="javascript:;"
							class="fa fa-chevron-down"></a>
						</span>
					</header>
					<div class="panel-body">
						<div class="adv-table editable-table ">
							<div class="adv-table editable-table">
					<a class='btn btn-primary btn-sm shiny' href='insert/insertstudent.php'><i class="fa fa-plus"  >增加学生信息</i></a></div>
							<div class="space15"></div>

<table class="table table-striped table-hover table-bordered"
								id="editable-sample">
								<thead>
									<tr>
										<th>学号</th>
										<th>姓名</th>
										<th>班级</th>
										<th>性别</th>
										<th>修改</th>
										<th>删除</th>
									</tr>
								</thead>
<{foreach $ary as $a}>
<tr>
<td><{$a.studentId}></td>
<td><{$a.name}></td>
<td><{$a.className}></td>
<td><{$a.sex}></td>
<td><a href="edit/editstudent.php?id=<{$a.id}>">编辑</td>
<td><a href="delete/deletestudent.php?id=<{$a.id}>">删除</td>
</tr>
<{/foreach}>
</table>

</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>

	<script type="text/javascript"
		src="js/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

	<script src="js/scripts.js"></script>

	<script src="js/editable-table.js"></script>

	<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>
