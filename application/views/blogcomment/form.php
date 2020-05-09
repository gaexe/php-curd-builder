<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
  <div class="page-title">
  <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
    <li><a href="<?php echo site_url('blogcomment') ?>"><?php echo $pageTitle ?></a></li>
    <li class="active"> Form </li>
  </ul>      
</div>
 
   <div class="page-content-wrapper m-t">
      
      <ul class="parsley-error-list">
        <?php echo $this->session->flashdata('errors');?>
      </ul>
      
    <div class="sbox" >
    <div class="sbox-title" >
      <h5><?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h5>
    </div>
    <div class="sbox-content" >

      
     <form action="<?php echo site_url('blogcomment/save/'.$row['commentID']); ?>" class='form-vertical'  parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-6">
						<fieldset><legend> Comment</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Comment    </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['comment'];?>' name='comment'   /> 						
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Information</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> BlogID    </label>									
									  <select name='blogID' rows='5' id='blogID' code='{$blogID}' 
							class='select2 '    ></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> User Id    </label>									
									  <select name='user_id' rows='5' id='user_id' code='{$user_id}' 
							class='select2 '    ></select> 						
								  </div> 					
								  <div class="form-group hidethis " style="display:none;">
									<label for="ipt" class=" control-label "> CommentID    </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['commentID'];?>' name='commentID'   /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Created    </label>									
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['created'];?>' name='created'
				style='width:150px !important;'	   /> 						
								  </div> </fieldset>
			</div>
			
			
    
      <div style="clear:both"></div>  
        
     <div class="toolbar-line text-center">    
      <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
      <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
      <a href="<?php echo site_url('blogcomment');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
     </div>
            
    </form>
    
    </div>
    </div>

  </div>  
</div>  
</div>
       
<script type="text/javascript">
$(document).ready(function() { 

		$("#blogID").jCombo("<?php echo site_url('blogcomment/comboselect?filter=tb_blogs:blogID:title') ?>",
		{  selected_value : '<?php echo $row["blogID"] ?>' });
		
		$("#user_id").jCombo("<?php echo site_url('blogcomment/comboselect?filter=tb_users:id:email') ?>",
		{  selected_value : '<?php echo $row["user_id"] ?>' });
		    
});
</script>     