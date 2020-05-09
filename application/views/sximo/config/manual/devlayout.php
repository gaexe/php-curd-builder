<div class="page-content row">  
  <div class="page-header"> <!-- Page header -->
    <div class="page-title">
      <h3> <?php echo  $pageTitle ;?> <small><?php echo $pageNote ;?></small></h3>
    </div>    
    
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>"> <?php echo $this->lang->line('core.home'); ?>  Home</a></li>
      <li class="active"> Title </li>
    </ul>      
      
  </div><!-- /Page header -->

   <div class="page-content-wrapper m-t">
    <div class="row">

      <div class="col-md-4">
        <?php $this->load->view('sximo/config/manual/developersidebar'); ?>
      </div>

      <div class="col-md-8">

      </div>
      
    </div>
   </div><!-- page-content-wrapper -->

</div> <!-- /page-content-row -->