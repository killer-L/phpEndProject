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

<!--data table-->
<link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
</head>

<body class="sticky-header">
<div class="page-heading">
		<h3>该学生成绩</h3>

	</div>
	<!-- page heading end-->

	<!--body wrapper start-->
	<div class="wrapper">
		<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						成绩表 <span class="tools pull-right"> <a href="javascript:;"
							class="fa fa-chevron-down"></a>
						</span>
					</header>
					<div class="panel-body">
						<div class="adv-table editable-table ">
							<div class="adv-table editable-table">
							<form>
<{foreach $ary as $a}>
学号：<{$a.studentId}><br>
科目编号：<{$a.subjectId}><br>
成绩：<{$a.mark}><br>
<hr>

<{/foreach}>
</form>

</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--body wrapper end-->




	</div>
	<!-- main content end-->
	</section>

	<!-- Placed js at the end of the document so the pages load faster -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>

	<!--data table-->
	<script type="text/javascript"
		src="js/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

	<!--common scripts for all pages-->
	<script src="js/scripts.js"></script>

	<!--script for editable table-->
	<script src="js/editable-table.js"></script>

	<!-- END JAVASCRIPTS -->
	<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>
