<?php
//入口文件
//夹杂数据库 
//启动框架
//
//
//调用系统常量
define('IMOCC',realpath('./'));
define('CORE','/core');
define('APP','/app');
define('MODULE','app');
define('DEBUG',true);
if(DEBUG){
	 ini_set('display_error','On');
}else{
	 ini_set('display_error','Off');
}
//加载函数库
include CORE.'/common/function.php';
	// p(IMOCC);die;
	//启动框架
   include CORE.'/imocc.php';
//include CORE.'/imooc php';
spl_autoload_register('\core\imocc::load');
\core\imocc::run();




?>