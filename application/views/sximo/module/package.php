
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> <?php echo  $pageTitle ?> <small><?php echo $pageNote ; ?></small></h3>
      </div>
  

      <ul class="breadcrumb">
        <li><a href="<?php echo  site_url('config/dashboard') ?>"><?php echo $this->lang->line('core.home') ; ?></a></li>
    <li><a href="<?php echo  site_url('instantmodule') ?>"><?php echo $pageTitle ; ?></a></li>
        <li class="active"> Zip Module(s) as installer </li>
      </ul>
  </div> 
	
  <div class="page-content-wrapper"> 
  <?php if ($this->session->flashdata('message'))     : ?>
       <?php echo  $this->session->flashdata('message') ; ?>
  <?php endif; ?>  
  <div class="panel-default panel">
    <div class="panel-body">

    <ul class="parsley-error-list">
    </ul>
     <?php echo  Form_open_multipart('sximo/module/dopackage','package', ' class="form-horizontal" parsley-validate novalidate ') ; ?>
          <div class="col-md-6">
              <div class="header" >
                <h3> Instant Module</h3>
              </div>
              
              <div class="row col-md-12" >
                <div class="form-group  " >
                  <label for="Module Id" class=" control-label  text-left"> Application Title </label>
										<?php echo  form_input( array('class'=>'form-control', 'placeholder'=>'Enter Application Title', 'required'=>'true' , 'name'=>'app_name', 'value'=>''  )) ; ?> 
                </div>           
                  
                <div class="form-group  "  >
                  <label for="Module Id" class=" control-label  text-left"> SQL Statement </label>
                  <div class="">
										<?php echo  form_textarea( array('class'=>'form-control', 'placeholder'=>'Copy SQL Statement from PhpMyAdmin and paste here',  'rows' => 5, 'name'=>'sql_cmd', 'value'=>'' )) ; ?> 
                   </div> 
                </div>           
			  
                <div class="form-group  " >
                  <label for="Module Id" class=" control-label  text-left"> Upload SQL Statement File</label>
                  
										<?php echo  form_upload(array('class'=>'form-control', 'placeholder'=>'Enter SQL Statement', 'name'=>'sql_cmd_upload', 'value'=>''  )) ; ?> 
                 
                </div>           
               	
                <div class="form-group  " >
                  <label for="library" class=" control-label  text-left"> Include Library File(s)</label>
                    <?php foreach ( $file_inc['libraries'] as $file ): ?>
                  <div class="checkbox" >
                    <label><?php echo  Form_checkbox('file_libraries[]', $file ) ?> <?php echo $file ; ?> </label>
                  </div>
                    <?php endforeach; ?>
                </div>           
               	
                <div class="form-group  " >
                  <label for="helpers" class=" control-label  text-left"> Include Helper File(s)</label>
                    <?php foreach ( $file_inc['helpers'] as $file ): ?>
                  <div class="checkbox" >
                    <label><?php echo  Form_checkbox('file_helpers[]', $file ) ?> <?php echo $file ; ?> </label>
                  </div>
                    <?php endforeach; ?>
                </div>           
               	
                <div class="form-group  " >
                  <label for="lang" class=" control-label  text-left"> Include Language File(s)</label>
                    <?php foreach ( $file_inc['language/en'] as $file ): ?>
                  <div class="checkbox" >
                    <label><?php echo  Form_checkbox('file_lang[]', $file ) ?> <?php echo $file ; ?> </label>
                  </div>
                    <?php endforeach; ?>
                </div>           
               	
              
              </div>
              
          </div>
          
          
          <div class="col-md-6">
            <div class="header">
              <h3> What's this ?</h3>
            </div>
            
        <p> Zip Package is a tool for backup  your module as installer . </p> 
		   	<p>You can backup current module and install the modules to other application based Sximo builder - Edition CodeIgniter </p>
			<p> All module zipped are stored at <strong>uploads/zip</strong> folder , you can download them. </p>
              
          </div>
      
      
      <div style="clear:both"></div>  
        
        <div class="form-group">
        <label class="col-sm-4 text-right">&nbsp;</label>
        <div class="col-sm-8">  
        <button type="submit" class="btn btn-primary ">  <?php echo  $this->lang->line('core.sb_save') ; ?> </button>
        <button type="button" onclick="location.href='<?php echo  site_url('sximo/module') ?>' " id="submit" class="btn btn-success ">  <?php echo $this->lang->line('core.sb_cancel') ; ?> </button>
        </div>    
    
        </div> 
        
        <?php echo  Form_hidden('enc_id'      , $enc_id )     ; ?>
        <?php echo  Form_hidden('enc_module'  , $enc_module ) ; ?>
     
     <?php echo  Form_close() ; ?>
    </div>
  </div>  
</div>   </div>      
   <script type="text/javascript">
  $(document).ready(function() { 
     
  });
  </script>     