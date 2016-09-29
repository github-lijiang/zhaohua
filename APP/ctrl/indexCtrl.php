<?php
namespace app\ctrl;
class indexCtrl extends \core\imocc{
	public function index(){

		// p('This is boy!!');
		// $model=new \core\lib\model();
		// $sql='select * from type';
		// $re=$model->query($sql);
		// p($re->fetchAll() );
		// $t=\core\lib\conf::get('CTRL','config');
		// $t=\core\lib\conf::get('ACTION','config');
		//print_r($t);
		header("content-type:text/html;charset=utf-8");
		$data = "Hello World!!";
		$title= "我不好";
		$this->assign('data',$data);
		$this->assign('title',$title);
		$this->display('index.html');
	}
}
?>  