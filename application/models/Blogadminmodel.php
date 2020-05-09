<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blogadminmodel extends SB_Model 
{

	public $table = 'tb_blogs';
	public $primaryKey = 'blogID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_blogs.* FROM tb_blogs   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_blogs.blogID IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
