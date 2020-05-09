<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"><?php echo $this->lang->line('core.m_dashboard'); ?> </a></li>
		<li><a href="<?php echo site_url('groups') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->userdata("message") ?>
		 <form action="<?php echo site_url('groups/save/'.$row['group_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" >
<div class="col-md-12">
						<fieldset><legend> Users Group</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Group Id" class=" control-label col-md-4 text-left"> Group Id </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['group_id'];?>' name='group_id'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Name" class=" control-label col-md-4 text-left"> Name <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['name'];?>' name='name'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
									<div class="col-md-8">
									  <textarea name='description' rows='2' id='description' class='form-control '  
				           ><?php echo $row['description'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Level" class=" control-label col-md-4 text-left"> Level <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['level'];?>' name='level'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			

		
			<div style="clear:both"></div>	
				
			  <div class="form-group">
				<label class="col-sm-4 text-right"> </label>
				<div class="col-sm-8">	
				<input type="submit" name="apply" class="btn btn-info" value="Apply" />
				<input type="submit" name="submit" class="btn btn-primary" value="Save & Return " />
				</div>	  
		
			  </div> 
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
 	 
});
</script>		 