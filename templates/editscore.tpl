<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="../js/laydate.js"></script>
<title>修改成绩信息</title>
</head>
<body>
<div class="page-heading">
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>修改成绩信息</h2>
				</div>
			</div>
		
			<hr />
			<div class="row ">

				<div
					class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong> 修改信息 </strong>
						</div>
						<div class="panel-body">

							<form method="post" action="editscoredo.php">
								<hr />
								<div class="form-signin-heading text-center">

									<{foreach $ary as $a}>
									<input type='hidden' name='id' value='<{$a.id}>' /> <br />

									<div class="form-group input-group">
										<tr>
											<td align='center'><i class="fa fa-bookmark fa-1x"></i>&nbsp;&nbsp;&nbsp;学号：</td>
											<td><input type='text' name='studentId'
												value='<{$a.studentId}>' /></td>
										</tr>
									</div>
									<div class="form-group input-group">
										<tr>
											<td align='center'><i class="fa fa-user fa-1x"></i>&nbsp;&nbsp;&nbsp;科目编号：</td>
											<td><input type='text' name='subjectId' value='<{$a.subjectId}>' /></td>
										</tr>
									</div>
									<div class="form-group input-group">

										<tr>
											<td align='center'><i class="fa fa-book fa-1x"></i>&nbsp;&nbsp;&nbsp;成绩：</td>
											<td><input type='text' name='mark'
												value='<{$a.mark}>' /></td>
										</tr>
									</div>
								
									<div class="form-group input-group">
										<input type="submit" name="Submit" value="提交修改"
											class="btn btn-primary ">

									</div>
								<{/foreach}>
								</div>




							</form>

						</div>

					</div>
				</div>
			</div>

			<script src="../js/jquery-1.10.2.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/modernizr.min.js"></script>

</body>
</html>
