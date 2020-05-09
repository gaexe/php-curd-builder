
<div class="widget" >
  <div class="headline" >
    <h3>Categories</h3>
    
    <ul class="nolist" >
      
<?php 
    foreach ( $rowsCategory as $k => $cat ){
      echo  '
      <li><a href="'.site_url('blog/category/'.$cat['CatID']).'" class="" >'.$cat['name'].'</a> </li>';
    }
?>    
    </ul>
    
  </div>
</div>


<div class="widget comments" >
  <div class="headline" >
    <h3>Comments</h3>
    
    <ul class="nolist" >
      
<?php 
    foreach ( $rowsComment as $k => $comment ){
      echo  '
      <li><a href="'.site_url('blog/read/'.$comment['_blog']['slug']).'" class="" >'.word_limiter($comment['comment'],8).' </a><span>@ '.$comment['_user']['username'].'</span> </li>';
    }
?>    
    </ul>
    
  </div>
</div>


<link href="<?php echo base_url('sximo/css/modules/blog.css') ?>" rel="stylesheet" type="text/css"/>