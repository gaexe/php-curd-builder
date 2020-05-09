<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blogcommentmodel extends SB_Model 
{

	public $table = 'tb_blogcomments';
	public $primaryKey = 'commentID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_blogcomments.* FROM tb_blogcomments   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_blogcomments.commentID IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
  
  public function getBlog ( $id ){

		$query = $this->db->query(
			" select {$this->table}.*, tb_users.username, tb_users.first_name, tb_users.last_name from {$this->table} " .
			" left join tb_users on tb_users.id = {$this->table}.user_id ".
			" AND blogID = '{$id}' ".
			$this->queryGroup()
		);
		$result = $query->row_array();
		return $result;
  
  }
  
  
	
}

?>
