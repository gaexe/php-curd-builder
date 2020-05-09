<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
  <div class="page-title">
  <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
    <li><a href="<?php echo site_url('blog') ?>"><?php echo $pageTitle ?></a></li>
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

      
     <form action="<?php echo site_url('blog/save/'.$row['blogID']); ?>" class='form-vertical'  parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-6">
						<fieldset><legend> Blog</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Title  <span class="asterix"> * </span>  </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['title'];?>' name='title'  required /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Slug  <span class="asterix"> * </span>  </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['slug'];?>' name='slug'  required /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Content    </label>									
									  <textarea name='content' rows='2' id='editor' class='form-control markItUp '  
						 ><?php echo $row['content'] ;?></textarea> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Entryby    </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['entryby'];?>' name='entryby'   /> 						
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Option</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="ipt" class=" control-label "> BlogID    </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['blogID'];?>' name='blogID'   /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Status    </label>									
									  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( 'publish' => 'Publish' ,  'unpublish' => 'UnPublish' ,  'draft' => 'Draft' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> CatID    </label>									
									  <select name='CatID' rows='5' id='CatID' code='{$CatID}' 
							class='select2 '    ></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Created    </label>									
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['created'];?>' name='created'
				style='width:150px !important;'	   /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Tags    </label>									
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tags'];?>' name='tags'   /> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Image    </label>									
									  <input  type='file' name='image' id='image' <?php if($row['image'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['image'],'/uploads/blogs/') ;?>
				 						
								  </div> </fieldset>
			</div>
			
			
    
      <div style="clear:both"></div>  
        
     <div class="toolbar-line text-center">    
      <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
      <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
      <a href="<?php echo site_url('blog');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
     </div>
            
    </form>
    
    </div>
    </div>

  </div>  
</div>  
</div>
       
<script type="text/javascript">
$(document).ready(function() { 

		$("#CatID").jCombo("<?php echo site_url('blog/comboselect?filter=tb_blogcategories:CatID:name') ?>",
		{  selected_value : '<?php echo $row["CatID"] ?>' });
		    
});
</script>     