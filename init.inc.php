<?php
	define("ROOT",str_replace('\\','/',dirname(__FILE__)));
	//__FILE__是PHP中的预定义常量，表示当前文件所在路径。str_replce函数把
	// "\"换成"/"目的是为了兼容在linux操作系统下的目录
	require_once(ROOT.'/libs/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->setTemplateDir(ROOT.'/templates');
	$smarty->setCompileDir(ROOT.'/templates_c');
	$smarty->right_delimiter='}>';
	$smarty->left_delimiter='<{';
	
?>
