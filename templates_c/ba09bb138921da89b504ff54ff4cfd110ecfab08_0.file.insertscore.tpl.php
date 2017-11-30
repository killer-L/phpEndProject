<?php /* Smarty version 3.1.27, created on 2017-11-30 07:32:00
         compiled from "C:\wamp64\www\phpEndProject\templates\insertscore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5595a1fb3f07bb3e8_45078519%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba09bb138921da89b504ff54ff4cfd110ecfab08' => 
    array (
      0 => 'C:\\wamp64\\www\\phpEndProject\\templates\\insertscore.tpl',
      1 => 1512027094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5595a1fb3f07bb3e8_45078519',
  'variables' => 
  array (
    'ary' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1fb3f08fb638_61778860',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1fb3f08fb638_61778860')) {
function content_5a1fb3f08fb638_61778860 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5595a1fb3f07bb3e8_45078519';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php echo '<script'; ?>
 type="text/javascript" src="js/laydate.js"><?php echo '</script'; ?>
>
<title>增加学生信息</title>
</head>
<body>
<div class="page-heading">
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>增加学生信息</h2>
				</div>
			</div>
			<!-- /. ROW  -->
			<hr />
			<div class="row ">

				<div
					class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong> 添加信息 </strong>
						</div>
						<div class="panel-body">
							<form role="form" action='insertscoredo.php' method='post'>
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
								<input type='hidden' name='id' /> <br />
								<div class="form-group input-group">
									<tr>
										<td align='center'>学号</td>
										<td><input type='text' name='<?php echo $_smarty_tpl->tpl_vars['a']->value['studentId'];?>
' /></td>
									</tr>
								</div>
								<div class="form-group input-group">
									<tr>
										<td align='center'>科目编号</td>
										<td><input type='text' name='<?php echo $_smarty_tpl->tpl_vars['a']->value['subjectId'];?>
' /></td>
									</tr>
								</div>
								<div class="form-group input-group">

									<tr>
										<td align='center'>成绩</td>
										<td><input type='text' name='<?php echo $_smarty_tpl->tpl_vars['a']->value['mark'];?>
' /></td>
									</tr>
								</div>
								
								
						<div class="form-group input-group">
							<input type="submit" name="Submit" value="确认添加"
								class="btn btn-primary ">
						</div>
						<hr />
					<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
					</form>
				</div></div>

			</div>
		</div>


	</div>
	</div>
	</div>


	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<?php echo '<script'; ?>
 src="assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
	<!-- BOOTSTRAP SCRIPTS -->
	<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- METISMENU SCRIPTS -->
	<?php echo '<script'; ?>
 src="assets/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
	<!-- CUSTOM SCRIPTS -->
	<?php echo '<script'; ?>
 src="assets/js/custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
?>