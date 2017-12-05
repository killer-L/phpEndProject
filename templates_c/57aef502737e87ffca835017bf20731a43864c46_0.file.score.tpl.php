<?php /* Smarty version 3.1.27, created on 2017-12-05 15:44:07
         compiled from "C:\wamp64\www\phpEndProject\templates\score.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20355a26bec7006eb4_08709648%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57aef502737e87ffca835017bf20731a43864c46' => 
    array (
      0 => 'C:\\wamp64\\www\\phpEndProject\\templates\\score.tpl',
      1 => 1512488645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20355a26bec7006eb4_08709648',
  'variables' => 
  array (
    'ary' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a26bec721e689_86516056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a26bec721e689_86516056')) {
function content_5a26bec721e689_86516056 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20355a26bec7006eb4_08709648';
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
		<h3>成绩管理</h3>

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
					<a class='btn btn-primary btn-sm shiny' href='insert/insertscore.php'><i class="fa fa-plus"  >增加成绩信息</i></a></div>
							<div class="space15"></div>

<table class="table table-striped table-hover table-bordered"
								id="editable-sample">
								<thead>
									<tr>
										<th>学号</th>
										<th>科目</th>
										<th>成绩</th>
										<th>修改</th>
										<th>删除</th>
									</tr>
								</thead>
<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['studentId'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['subjectId'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['mark'];?>
</td>
<td><a href="edit/editscore.php?id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">编辑</td>
<td><a href="delete/deletescore.php?id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">删除</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
</table>

</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--body wrapper end-->





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