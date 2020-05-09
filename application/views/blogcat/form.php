<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
  <div class="page-title">
  <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
    <li><a href="<?php echo site_url('blogcat') ?>"><?php echo $pageTitle ?></a></li>
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


     <form action="<?php echo site_url('blogcat/save/'.$row['CatID']); ?>" class='form-vertical'  parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" >


<div class="col-md-8">
						<fieldset><legend> Category</legend>

								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Name  <span class="asterix"> * </span>  </label>
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['name'];?>' name='name'  required />
								  </div>
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Description    </label>
									  <textarea name='descr' rows='10' id='descr' class='form-control markItUp'
				           ><?php echo $row['descr'] ;?></textarea>
								  </div> </fieldset>
			</div>

			<div class="col-md-4">
						<fieldset><legend> Information</legend>

								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Slug  <span class="asterix"> * </span>  </label>
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['slug'];?>' name='slug'  required />
								  </div>
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Enable    </label>

					<?php $enable = explode(',',$row['enable']);
					$enable_opt = array( '1' => 'Yes' ,  '0' => 'No' , ); ?>
					<select name='enable' rows='5'   class='select2 '  >
						<?php
						foreach($enable_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['enable'] == $key ? " selected='selected' " : '' ).">$val</option>";
						}
						?></select>
								  </div>
								  <div class="form-group hidethis " style="display:none;">
									<label for="ipt" class=" control-label "> CatID    </label>
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['CatID'];?>' name='CatID'   />
								  </div> </fieldset>
			</div>



      <div style="clear:both"></div>

     <div class="toolbar-line text-center">
      <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
      <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
      <a href="<?php echo site_url('blogcat');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
     </div>

    </form>

    </div>
    </div>

  </div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {

});
</script>