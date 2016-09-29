<?php
namespace core\lib;
class model extends \PDO
{
	public function __construct(){


	$dsn='mysql:host=localhost;dbname=basic';
	$username='root';
	$password='root';
	//conf::get('');
	try{
		parent::__construct($dsn,$username,$password);

	}catch(\PDOException $e){
          p($e->getMessage());
	}

	}
}

?>