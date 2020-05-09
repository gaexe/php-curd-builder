
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
      </div>

      <ul class="breadcrumb">
        <li><a href="<?php echo site_url('') ?>">Home</a></li>
        <li class="active"><?php echo $pageTitle ?></li>
      </ul>

    </div>


  <div class="container blog">

    <div class="row" >
      <div class="col-md-9" >
<?php 
      if( count( $rowData ) ){
        foreach ($rowData as $k => $row) {
          $row = (array) $row;
          $htm = '
          <div class="post " >
            
            <div class="headline" >
              <h3><a href="'.site_url('blog/read/'.$row['slug']).'" >'.$row['title'].'</a></h3>
            </div>
            <div class="info" >
              <span class="date" >'.date('F j, Y', strtotime( $row['created'] )) .'</span>
              <span class="author" >- by '.$row['author'].'</span>
            </div>
            <div class="tags" >';
            
            $tags = explode( ',',$row['tags']);
            foreach ( $tags as $l => $tag ){
              $htm .= '
              <span><i class="fa fa-tags" ></i> <a href="'.site_url('blog/tags/'.str_replace(' ','-',trim($tag))).'" >'.trim($tag).'</a></span> ';
            }
           
          $htm .='    
            </div>
          
            <div class="content" >
              '.word_limiter(strip_tags( $row['content'] ),40).'
            </div>
            <br/>
            <div class="readmore" >
              <a class="btn btn-sm btn-success" href="'.site_url('blog/read/'.$row['slug']).'" >Read more</a>
            </div>
          </div>
          ';
          
          echo $htm;
          
        }
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

<script>
$(document).ready(function(){

  $('.do-quick-search').click(function(){
    $('#SximoTable').attr('action','<?php echo site_url("blog/multisearch");?>');
    $('#SximoTable').submit();
  });
  
});  
</script>
