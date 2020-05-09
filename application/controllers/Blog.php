<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends SB_Controller 
{

  protected $layout   = "layouts/main";
  public $module     = 'blog';
  public $per_page  = '10';

  function __construct() {
    parent::__construct();
    
    $this->load->model('blogmodel');
    $this->model = $this->blogmodel;
    $this->load->helper('text');
    
    $this->info = $this->model->makeInfo( $this->module);
    $this->data = array_merge( $this->data, array(
      'pageTitle'  =>   $this->info['title'],
      'pageNote'  =>  $this->info['note'],
      'pageModule'  => 'blog',
    ));
    
  }
  
  function index() 
  {
      
    // Filter sort and order for query 
    $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : 'blogID'); 
    $order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : 'asc');
    // End Filter sort and order for query 
    // Filter Search for query    
    $filter = (!is_null($this->input->get('search', true)) ? $this->buildSearch() : '');
    // End Filter Search for query 
    
    $page = max(1, (int) $this->input->get('page', 1));
    $params = array(
      'page'    => $page ,
      'limit'    => ($this->input->get('rows', true) !='' ? filter_var($this->input->get('rows', true),FILTER_VALIDATE_INT) : $this->per_page ) ,
      'sort'    => $sort ,
      'order'    => $order,
      'params'  => $filter,
    );
    // Get Query 
    $results = $this->model->getRows( $params );    
    
    // Build pagination setting
    $page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;  
    
    foreach ( $results['rows'] as $k => & $row ){
      $q_user = $this->db->get_where( 'tb_users', array( 'id' => $row->entryby ));
      $user = $q_user->row();
      $row->author = $user->first_name.' '.$user->last_name;
    }

   
    $this->data['rowData']    = $results['rows'];
    // Build Pagination
    
    $pagination = $this->paginator( array(
      'total_rows' => $results['total'] ,
      'per_page'   => $params['limit']
    ));
    $this->data['pagination']  = $pagination;
    
    $this->data['rowsComment'] = $this->model->getComment(); 
    $this->data['rowsCategory'] = $this->model->getCategory();
    
    // Render into template
    
    $this->data['content'] = $this->load->view('blog/index',$this->data, true );
    
      $this->load->view('layouts/'.CNF_THEME.'/index', $this->data );
    
    
  }
  
  function read( $id = null) 
  {

    $row = $this->model->getRowWhere('slug',$id);
    if($row)
    {
      $this->data['row'] =  $row;
    } else {
      $this->data['row'] = $this->model->getColumnTable('tb_blogs'); 
    }
    
    $this->load->model('blogcommentmodel');
    $rows_comment = $this->blogcommentmodel->getBlog( $row['blogID'] );
    
    $this->data['comments'] = $rows_comment;
    $this->data['id'] = $id;
    
    $this->data['rowsComment']      = $this->model->getComment(); 
    $this->data['rowsCategory']     = $this->model->getCategory();
    $this->data['rowsBlogComment']  = $this->model->getBlogComment( $row['blogID'] );
    
    $this->data['content'] =  $this->load->view('blog/view', $this->data ,true);    
    $this->load->view('layouts/'.CNF_THEME.'/index', $this->data );
      
  }
  
  function category( $id ) {
    
    $page = max(1, (int) $this->input->get('page', 1));
    $params = array(
      'page'    => $page ,
      'limit'    => $this->per_page  ,
      'sort'    => 'created' ,
      'order'    => 'desc',
      'params'  => " and CatID = {$id} " ,
    );
    // Get Query 
    $results = $this->model->getRows( $params );    
      foreach ( $results['rows'] as $k => & $row )
      {
        $q_user = $this->db->get_where( 'tb_users', array( 'id' => $row->entryby ));
        $user = $q_user->row();
        $row->author = $user->first_name.' '.$user->last_name;
      }
    // Build pagination setting
    $page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;  
    #$pagination = Paginator::make($results['rows'], $results['total'],$params['limit']);    
    $this->data['rowData']    = $results['rows'];
    // Build Pagination
    
    $pagination = $this->paginator( array(
      'total_rows' => $results['total'] ,
      'per_page'   => $params['limit']
    ));
    $this->data['pagination']  = $pagination;
    
    $this->data['rowsComment'] = $this->model->getComment(); 
    $this->data['rowsCategory'] = $this->model->getCategory();
    
    $this->data['content'] = $this->load->view('blog/index',$this->data, true );
    
    $this->load->view('layouts/'.CNF_THEME.'/index', $this->data );
    
    
  }
  
  function tags($tag) {
    
    $tag = str_replace('-',' ', $tag );
    
    $page = max(1, (int) $this->input->get('page', 1));
    $params = array(
      'page'    => $page ,
      'limit'    => $this->per_page  ,
      'sort'    => 'created' ,
      'order'    => 'desc',
      'params'  => " and tags rlike '.*{$tag}.*' " ,
    );
    // Get Query 
    $results = $this->model->getRows( $params );    
    foreach ( $results['rows'] as $k => & $row )
    {
      $q_user = $this->db->get_where( 'tb_users', array( 'id' => $row->entryby ));
      $user = $q_user->row();
      $row->author = $user->first_name.' '.$user->last_name;
    }
    // Build pagination setting
    $page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;  
    #$pagination = Paginator::make($results['rows'], $results['total'],$params['limit']);    
    $this->data['rowData']    = $results['rows'];
    // Build Pagination
    
    $pagination = $this->paginator( array(
      'total_rows' => $results['total'] ,
      'per_page'   => $params['limit']
    ));
    $this->data['pagination']  = $pagination;
    
    $this->data['rowsComment'] = $this->model->getComment(); 
    $this->data['rowsCategory'] = $this->model->getCategory();
    
    $this->data['content'] = $this->load->view('blog/index',$this->data, true );
    
      $this->load->view('layouts/'.CNF_THEME.'/index', $this->data );
    
  }
  
  function saveComment() {
    
    $this->load->model('blogcommentmodel');
    
    $this->info = $this->blogcommentmodel->makeInfo( 'blogcomment' );
    $this->access['is_global'] = 1;
    $slug = $this->input->post('slug', true );

    $data = $this->validatePost();
			$ID = $this->blogcommentmodel->insertRow($data , $this->input->get_post( 'commentID' , true ));
			// Input logs
			if( $this->input->get( 'commentID' , true ) =='')
			{
				$this->inputLogs("New Entry row with ID : $ID  , Has Been Save Successfull");
			} else {
				$this->inputLogs(" ID : $ID  , Has Been Changed Successfull");
			}
			// Redirect after save	
			SiteHelpers::alert('success'," Data has been saved succesfuly !");
      
      redirect( 'blog/read/'. $slug ,301);
    
  }

  function getRemovecomm($commentID , $slug)
  {
    // delete multipe rows 
    $this->db->where('commentID',$commentID);
    $this->db->delete('tb_blogcomments');
    $this->session->set_flashdata('message',SiteHelpers::alert('success','Comment has been removed !'));
    return Redirect('blog/read/'.$slug);
  }


}
