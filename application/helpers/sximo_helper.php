<?php 


class SximoHelpers {


  public static function get_zip_content($name , $zip ) {  
      
    $contents = '';  
      
    if( file_exists( $zip )){  
      
      $fp = fopen('zip://' . $zip . '#'. $name , 'r');  
      if (!$fp) {  
          SiteHelpers::alert("error","cannot open zip file: {$zip}n");  
      }  
      while (!feof($fp)) {  
          $contents .= fread($fp, 2);  
      } 
      
    } else {  
      SiteHelpers::alert("error","cannot find zip file: {$zip}n");  
    }  
        
    fclose($fp); 
    return $contents;  
      
  }    

  public static function cf_unpackage($zip_path) { 
    $_this =& get_instance();
		
    $ain = unserialize( base64_decode( self::get_zip_content ( '.ain' , $zip_path )));  
     
    $tmp_name  = md5( date('YmdHis') ); 
     
    $zip = new ZipArchive; 
    $zipres = $zip->open( $zip_path ); 
    if( $zipres === TRUE){ 
       
      $app_path = APPPATH; //dirname( base_path()) .'/uploads/zip/'. $tmp_name; 
      
      if( ! is_dir( $app_path )){
        mkdir( $app_path ); 
      }
      $zip->extractTo( $app_path ); 
      $zip->close(); 
       
      $sql_str = file_get_contents( $app_path .'/.mysql'); 
      
      /* CHANGE START HERE: */
      
      preg_match_all( '/[\s]*(CREATE|DROP|TRUNCATE)(.*);/Usi',$sql_str, $sql_table );
      
      preg_match_all( '/[\s]*(INSERT|UPDATE|DELETE)(.*)[\s\)]+;/Usi',$sql_str, $sql_row );
	  
	  $mysql_pass = true;
	  
      try
      {
        foreach ( $sql_table[0] as $k => $sql ){
          $res = $_this->db->query( $sql );
        }
      }
      catch(Exception $e) { 
        //throw $e; 
        $mysql_pass = false;
      }
      
      try
      {
        
        foreach ( $sql_row[0] as $k => $sql ){
          $res = $_this->db->query( $sql );
        }
      }
      catch(Exception $e) { 
        //throw $e; 
        $mysql_pass = false;
        
      }
      
      /* CHANGE END HERE */
      
      $setting_str = file_get_contents( $app_path .'/.setting'); 
      $_setting = unserialize( base64_decode( $setting_str )); 
       
      self::store_setting( $_setting['tb_module'], 'tb_module','module_name','module_id'); 
       
      $_tmpfile = array( '.ain','.mysql','.setting'); 
      foreach ( $_tmpfile as $_file ){ 
        unlink( $app_path.'/'. $_file ); 
      } 

      if( $mysql_pass ){
        $data['status'] = '1'; 
        $data['error'] = 0;
      } else {
        $data['status'] = 1;
        $data['sql_error'] = 'mysql parsing error, please install mysql manually';
      }
       
    } else { 
       
      $data['status'] = 0; 
      $data['error'] = "unzip error"; 
       
    }

    return $data;
  } 
  
  public static function store_setting( $rows , $table_name , $where_field , $pk_field ) {
    if( !is_array( $rows )){
      $rows = array( $rows );
    }
		
		$_this =& get_instance();
		
		
    foreach ( $rows as $k => $row ){
			$Q = $_this->db->query(" select * from {$table_name} where {$where_field}= '{$row->$where_field}' ");
      $r = $Q->result_array();
      if( count( $r )){
        // update
        unset( $row->{$pk_field} );
				
				$_this->db->where( $where_field , $row->$where_field );
				$_this->db->update( $table_name , (array) $row );
        
      } else {
        // insert
				$_this->db->insert( $table_name , (array) $row );
        $_id = $_this->db->insert_id();
      }
      
      //trace($this->db->last_query(),'lq');
    }
    
  }

  static function tf_read ( $a ){
    return base64_decode( $a  );
  }

  static function tf_write ( $a ){
    return base64_encode( $a );
  }

}

?>