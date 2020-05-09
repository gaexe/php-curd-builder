<?php echo form_open('sximo/config/postAddtranslation/'); ?>
 <div class="row">
  <div class="form-group">
    <label for="ipt" class=" control-label col-md-4"> Languange Name </label>
	<div class="col-md-8">
	<input name="name" type="text" id="name" class="form-control input-sm" value="" required="true" /> 
	 </div> 
  </div>   	
 
  <div class="form-group">
    <label for="ipt" class=" control-label col-md-4"> Folder Name </label>
	<div class="col-md-8">
	<input name="folder" type="text" id="folder" class="form-control input-sm" value="" required /> 
	 </div> 
  </div>   	
  
   <div class="form-group">
    <label for="ipt" class=" control-label col-md-4"> Author </label>
	<div class="col-md-8">
	<input name="author" type="text" id="author" class="form-control input-sm" value="" required /> <br>
	 </div> 
  </div>   	
  
  <div class="form-group">
    <label for="ipt" class=" control-label col-md-4">  </label><br>
	<div class="col-md-8">
		<button type="submit" name="submit" class="btn btn-info"> Add Languange</button>
	</div> 
  </div>  
 </div> 	 	
<?php echo form_close(''); ?>