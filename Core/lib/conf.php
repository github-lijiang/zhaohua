<?php
namespace core\lib;
class conf{
	static public $conf=array();
	static public function get($name,$file){	
		//$file=IMOCC
		header("content-type:text/html;charset=utf-8");
		p(self::$conf);
		if(isset(self::$conf[$file])){
			return self::$conf[$file][$name];
		}else{
			p(1);
			$path=IMOCC.'/core/config/'.$file.'.php';
		p($path);die;
		if(is_file($path)){
			$conf=include $path;
			if(isset($conf[$name])){
				self::$conf[$file]=$conf;
				return $conf[$name];
			}else{
			throw new \Exception('没有这个配置项'.$name);
			}
		}else{
			throw new \Exception('找不到配置文件'.$file);
			
		}

}
		

		
	}
	public function all($file){

	} 
}



?>