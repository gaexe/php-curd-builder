<div class="page-content row">  
  <div class="page-header"> <!-- Page header -->
    <div class="page-title">
      <h3> <?php echo  $pageTitle ;?> <small><?php echo $pageNote ;?></small></h3>
    </div>    
    
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>"> <?php echo $this->lang->line('core.home'); ?> </a></li>
      <li class="active"> Title </li>
    </ul>      
      
  </div><!-- /Page header -->

   <div class="page-content-wrapper m-t">
      <div class="row">
        <div class="col-md-4">
          <?php $this->load->view('sximo/config/manual/developersidebar'); ?>
        </div>

        <div class="col-md-8">
          <h2 >Module Structure   </h2>
          <p>Everytime you create new module , it wil create files and folder as following items : </p>
          <ul class="list-unstyled">
            <li><i style="color: #FFCC00" class="fa fa-folder"></i>  application
              <ul>
                <li><i style="color: #FFCC00" class="fa fa-folder"></i> controllers 
                  <ul>
                    <li><i style="color: #ddd" class="fa fa-file"></i> ModuleController.php </li> 
                  </ul>
                </li>
                <li><i style="color: #FFCC00" class="fa fa-folder"></i> models 
                  <ul>
                    <li><i style="color: #ddd" class="fa fa-file"></i> Module.php </li> 
                  </ul>             
                </li>
                <li><i style="color: #FFCC00" class="fa fa-folder"></i> views 
                  <ul>
                    <li><i style="color: #ddd" class="fa fa-file"></i> module
                      <ul>
                        <li><i style="color: #ddd" class="fa fa-file"></i> index.php </li>
                        <li><i style="color: #ddd" class="fa fa-file"></i> form.php </li>
                        <li><i style="color: #ddd" class="fa fa-file"></i> view.php </li> 
                        <li><i style="color: #ddd" class="fa fa-file"></i> inlineview.php (ajax version)</li> 
                      </ul>                 
                    </li>  
                  </ul>             
                </li>           
              </ul>
            </li>
          </ul> 
        </div>
      </div>
   </div><!-- page-content-wrapper -->

</div> <!-- /page-content-row -->

