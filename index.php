
<?php require_once 'base.php';?>
<?php 
    require_once 'conn.php';
    $r = mysql_query("select subject from subject");
    $ary=array();
    while ($row=mysql_fetch_array($r)){
        $ary[]=$row;
    }
    
?>
	<div class="page-heading">
		<h3>首页</h3>

	</div>

	<div class="wrapper">
		<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						个人成绩信息查询 <span class="tools pull-right"> <a href="javascript:;"
							class="fa fa-chevron-down"></a>
						</span>
					</header>
					<div class="panel-body">
						<div class="space15">
						<form action="stuscore.php" method="post">
						请输入学号查询成绩<input type="text" name="studentId"><br><input type="submit" value="搜索" name="submit">
							</form>
						</div>
					</div>
				</section>
			</div>
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						个人单科目成绩信息查询 <span class="tools pull-right"> <a href="javascript:;"
							class="fa fa-chevron-down"></a>
						</span>
					</header>
					<div class="panel-body">
						<div class="space15">
						<form action="subscore.php" method="post">
						请输入学号查询成绩<input type="text" name="studentId"><br>
						请选择科目：<select id="selsub">
						<option>请选择科目</option>
						<?php foreach ($ary as $a){ ?>
						          <option><?php echo $a['subject'];?></option>
						         
						          
						        <?php }?>  
						         
						</select><br>
						<input type="hidden" name="subject" id="hidden1">
						<input type="submit" value="搜索" name="submit">
						</form>
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

        $("#selsub").click(function(){
				$sub=$(this).val();
				$("#hidden1").attr("value",$sub);
            })
    });
    
</script>

</body>
</html>
