<?php /* Smarty version 3.1.27, created on 2017-11-30 08:24:05
         compiled from "C:\wamp64\www\phpEndProject\templates\subscore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145315a1fc02558af39_44282808%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0047feea96476872468e2cf40f6ced86197e9d96' => 
    array (
      0 => 'C:\\wamp64\\www\\phpEndProject\\templates\\subscore.tpl',
      1 => 1512030243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145315a1fc02558af39_44282808',
  'variables' => 
  array (
    'studentId' => 0,
    'name' => 0,
    'subject' => 0,
    'mark' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1fc025633358_37929213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1fc025633358_37929213')) {
function content_5a1fc025633358_37929213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145315a1fc02558af39_44282808';
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
学号：<?php echo $_smarty_tpl->tpl_vars['studentId']->value;?>
<br>
姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
科目：<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
<br>
成绩：<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
<br>
<hr>
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
	<?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-ui-1.9.2.custom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/modernizr.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.nicescroll.js"><?php echo '</script'; ?>
>

	<!--data table-->
	<?php echo '<script'; ?>
 type="text/javascript"
		src="js/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/data-tables/DT_bootstrap.js"><?php echo '</script'; ?>
>

	<!--common scripts for all pages-->
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

	<!--script for editable table-->
	<?php echo '<script'; ?>
 src="js/editable-table.js"><?php echo '</script'; ?>
>

	<!-- END JAVASCRIPTS -->
	<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
?>