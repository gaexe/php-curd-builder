
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> Translation   <small> Manage Language Translation </small></h3>
      </div>

		  <ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard');?>"><?php echo $this->lang->line('core.m_dashboard'); ?> </a></li>
			<li><a href="<?php echo site_url('sximo/config');?>"> Languange Manager </a></li>
		  </ul>
			  
	  
    </div>


	<div class="page-content-wrapper m-t">  	
	<ul class="nav nav-tabs" >
	  <li><a href="<?php echo site_url('sximo/config') ?>"><?php echo $this->lang->line('core.tab_siteinfo'); ?></a></li>
	  <li><a href="<?php echo site_url('sximo/config/email') ?>" ><?php echo $this->lang->line('core.tab_email'); ?></a></li>
	  <li><a href="<?php echo site_url('sximo/config/security') ?>" ><?php echo $this->lang->line('core.tab_loginsecurity'); ?></a></li>
	  <li class="active"><a href="<?php echo site_url('sximo/config/getTranslation') ?>" > <?php echo $this->lang->line('core.tab_translation'); ?> <sup>New </sup> </a></li>
	</ul>	
	 <div class="tab-pane active use-padding" id="info">	
<div class="tab-content">	 

    

<?php echo form_open('sximo/config/getTranslation/'); ?> 
	<div class="col-sm-8 m-t">
		<h4> Languange Manager </h4>
		<hr />
		<a href="<?php echo site_url('sximo/config/addTranslation') ?>" onclick="SximoModal(this.href,'Add New Language');return false;" class="btn btn-success"> Add New Translation </a>  
		<hr />
		<table class="table table-striped">
			<thead>
				<tr>
					<th> Name </th>
					<th> Folder </th>
					<th> Author </th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>		
		
			<?php foreach(SiteHelpers::langOption() as $lang) : ?>
				<tr>
					<td><?php echo $lang['name'] ?></td>
					<td><?php echo $lang['folder'] ?></td>
					<td><?php echo $lang['author'] ?></td>
				  	<td>
					<?php if($lang['folder'] !='en') : ?>
					<a href="<?php echo site_url('sximo/config/getTranslationEdit?edit='.$lang['folder']) ?>" class="btn btn-sm btn-primary"> Manage </a>
					<a href="<?php echo site_url('sximo/config/getRemovetranslation/'.$lang['folder']) ?>" class="btn btn-sm btn-danger"> Delete </a> 
					<?php endif;?>
				
				</td>
				</tr>
			<?php endforeach ?>
			
			</tbody>
		</table>
	</div> 


 	
 </div>
<?php echo form_close('') ?> 
</div>
</div>
</div>
</div>





