<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blogmodel extends SB_Model 
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
	
  public function getRowWhere ( $field , $id ){
		$query = $this->db->query(
			$this->querySelect() .
			$this->queryWhere().
			" AND {$field} = '{$id}' ".
			$this->queryGroup()
		);
		$result = $query->row_array();
		return $result;
    
  }
  
  public function getResultWhere ( $field , $id ){
		$query = $this->db->query(
			$this->querySelect() .
			$this->queryWhere().
			" AND {$field} = '{$id}' ".
			$this->queryGroup()
		);
		$result = $query->result_array();
		return $result;
    
  }
  
  public function getCategory (  ){
    $this->load->model('blogcatmodel');
    
    $param = array(
      'sort' => 'name' ,
      'order' => 'asc' ,
    );
    
    $data = $this->blogcatmodel->getRows( $param );
    
    $data = json_decode( json_encode( $data ), true );

    return $data['rows'];
    
  }
  
  public function getComment (  ){
    
    $this->load->model('blogcommentmodel');
    
    $param = array(
      'sort' => 'commentid' ,
      'order' => 'desc' ,
      'limit' => '5' ,
    );
    
    $data = $this->blogcommentmodel->getRows( $param );
    
    $data = json_decode( json_encode( $data ), true );
    
    foreach ( $data['rows'] as $k =>& $v ){
      $blog = $this->db->get_where( 'tb_blogs' , array( 'blogId' => $v['blogID'] ));
      $v['_blog'] = $blog->row_array();
      
      $user = $this->db->get_where( 'tb_users' , array( 'id' =>   $v['user_id'] ));
      $v['_user'] = $user->row_array();
      
    }
    
    return $data['rows'];
  }
  
  public function getBlogComment ( $id ){
    
    $this->db->select(" tb_blogcomments.*, tb_users.first_name, tb_users.last_name " );
    $this->db->join("tb_users", "tb_blogcomments.user_id = tb_users.id ", "left");
    $comment = $this->db->get_where( 'tb_blogcomments' , array( 'blogId' => $id ) );
    $data = $comment->result_array();
    
    return $data;
  
  }
  
  
}

?>
