<?php /* Smarty version 3.1.27, created on 2017-11-30 07:25:49
         compiled from "C:\wamp64\www\phpEndProject\templates\editscore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:147705a1fb27d0c16d3_89468917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa03fe6543e592300948cdbb2440ccd13a6a67d' => 
    array (
      0 => 'C:\\wamp64\\www\\phpEndProject\\templates\\editscore.tpl',
      1 => 1512026591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147705a1fb27d0c16d3_89468917',
  'variables' => 
  array (
    'ary' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1fb27d260796_69596308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1fb27d260796_69596308')) {
function content_5a1fb27d260796_69596308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147705a1fb27d0c16d3_89468917';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php echo '<script'; ?>
 type="text/javascript" src="../js/laydate.js"><?php echo '</script'; ?>
>
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
									<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
' /> <br />

									<div class="form-group input-group">
										<tr>
											<td align='center'><i class="fa fa-bookmark fa-1x"></i>&nbsp;&nbsp;&nbsp;学号：</td>
											<td><input type='text' name='studentId'
												value='<?php echo $_smarty_tpl->tpl_vars['a']->value['studentId'];?>
' /></td>
										</tr>
									</div>
									<div class="form-group input-group">
										<tr>
											<td align='center'><i class="fa fa-user fa-1x"></i>&nbsp;&nbsp;&nbsp;科目编号：</td>
											<td><input type='text' name='subjectId' value='<?php echo $_smarty_tpl->tpl_vars['a']->value['subjectId'];?>
' /></td>
										</tr>
									</div>
									<div class="form-group input-group">

										<tr>
											<td align='center'><i class="fa fa-book fa-1x"></i>&nbsp;&nbsp;&nbsp;成绩：</td>
											<td><input type='text' name='mark'
												value='<?php echo $_smarty_tpl->tpl_vars['a']->value['mark'];?>
' /></td>
										</tr>
									</div>
								
									<div class="form-group input-group">
										<input type="submit" name="Submit" value="提交修改"
											class="btn btn-primary ">

									</div>
								<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
								</div>




							</form>

						</div>

					</div>
				</div>
			</div>

			<?php echo '<script'; ?>
 src="../js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../js/modernizr.min.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
?>