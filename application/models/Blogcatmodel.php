<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blogcatmodel extends SB_Model 
{

	public $table = 'tb_blogcategories';
	public $primaryKey = 'CatID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_blogcategories.* FROM tb_blogcategories   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_blogcategories.CatID IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
