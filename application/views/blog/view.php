<div class="page-content row">
  <!-- Page header -->
  <div class="page-header">
    <div class="page-title">
      <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
    </div>
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>">Home</a></li>
      <li><a href="<?php echo site_url('blog') ?>"><?php echo $pageTitle ?></a></li>
      <li class="active"> <?php echo $row['title'] ?> </li>
    </ul>
  </div>  
  
  <div class="container">

    <div class="row" >
      <div class="col-md-9" >
<?php 
      if( ( $row ) ){
          $row = (array) $row;
          $htm = '
          <div class="post" >
            
            <div class="headline" >
              <h3>'.$row['title'].'</h3>
            </div>
            <div class="tags" >';
            
            $tags = explode( ',',$row['tags']);
            foreach ( $tags as $l => $tag ){
              $htm .= '
              <span><i class="fa fa-tags" ></i> <a href="'.site_url('blog/tags/'.urlencode(trim($tag))).'" >'.trim($tag).'</a></span> ';
            }
           
          $htm .='    
            </div>
          
            <div class="content" >
              '. $row['content'] .'
            </div>
          
          </div>
          
          <div class="comments margin-bottom-40" >
            <h4>Comments</h4>
          ';
          
          if (count($rowsBlogComment)) {
            
           
            $htm .=' 
            <div class="margin-bottom-40" >
            <ul class="nolist comments " >
              ';
            
            foreach ( $rowsBlogComment as $k => $comment ){
              $htm .= '
              <div class="margin-bottom-40" >
                <div class="quote" >
                  '.$comment['comment'].'
                  <span>by '.$comment['first_name'].' ' .$comment['last_name'].' </span>
                  <p></p>
                  <div class="form-group" >
                    <a href="'.site_url('blog/getRemovecomm/'.$comment['commentID'].'/'.$row['slug']) .'" class="btn-sm btn-danger btn" >Remove</a>
                  </div>
                </div>
              </div>
              
              ';
            }
              
              
            $htm .= '  
            </ul>
            </div>
            
            ';
            
          } else {
            $htm .= '
            <div class="margin-bottom-40" >
              no comments found.
            </div>
            ';
          
          }
          
          $htm .= '
          
          </div>
          
          ';
          
          
          if( $this->session->userdata("uid") ){
          
          $htm .= '
          <div class="row" >
          
          <div class="form-comment margin-bottom-40 col-md-10" >
            <h4>Leave Comment</h4>
            <form action="'.site_url('blog/saveComment').'" name="savecomment" id="savecomment" method="post" enctype="multipart/form-data" parsley-validate novalidate >
              <input type="hidden" name="blogID" value="'.$row['blogID'].'" id="" >
              <input type="hidden" name="user_id" value="'.$this->session->userdata("uid").'" id="" >
              <input type="hidden" name="slug" value="'.$row['slug'].'" id="" >
              
              <div class="form-group">
                <label for="">Comments</label>
                <textarea rows="5" class="form-control" name="comment" required ></textarea>
              </div>              
              
              <div class="form-group" >
                <label></label>
                <input type="submit" class="btn-sm btn-success btn" name="submit" value="Post Comment" >
              </div>
              
            </form>
            
          </div>
          </div>
          
          ';
          
          }
          
          echo $htm;
          
          
          
          
          
          
      } else {
        echo '
        <div class="headline" >
          <h3>Article Not found</h3>
        </div>
        ';
      }
?>        
      </div>
      
      <div class="col-md-3" >
<?php 
    $this->load->view('blog/sidebar');
?>        
      </div>
      
      
      
    </div>
  
  
</div>
    