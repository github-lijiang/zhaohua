<?php
namespace core;
class imocc{
	public $assign;
	public static $classMap=array();
	static  function run()
	{
		//p('ok');
		$route=new \core\lib\route();
		//p($route );
		$ctrlClass=$route->ctrl;
		//p($ctrlClass);
		$action=$route->action;
       // p($action);
		$ctrlfile=IMOCC.'/APP'.'/ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		
		p($ctrlfile);
		if(is_file($ctrlfile)){
			include $ctrlfile;
			$ctrl=new $ctrlClass;
			$ctrl->$action();

		}else{
			header("content-type:text/html;charset=utf-8");
			p('找不到服务器'.$ctrlClass);
		}


	}
	static public function load($class){

		//p($class);
		//p(IMOCC.'/'.$class.'.php');
		if(isset($classMap[$class])){
			return true;
		}else{
			
		
		$class=str_replace('\\', '/', $class);
		$file=IMOCC.'/'.$class.'.php';
		if(is_file($file)){
				include $file;
				self::$classMap[$class]=$class;
		}else{
				return false;
		}
	}
	}
	public function assign($name,$value){
			$this->assign[$name]=$value;
	}
	public function display($file){
		$file=IMOCC.'/APP'.'/views/'.$file;
		if(is_file($file)){
			extract($this->assign);
			include $file;
		}
	}
}

?>