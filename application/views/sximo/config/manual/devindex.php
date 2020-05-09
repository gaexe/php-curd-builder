<div class="page-content row">  
  <div class="page-header"> <!-- Page header -->
    <div class="page-title">
      <h3> <?php echo  $pageTitle ;?> <small><?php echo $pageNote ;?></small></h3>
    </div>    
    
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>"> <?php echo $this->lang->line('core.home'); ?> </a></li>
      <li><a href="<?php site_url('sximo/config/getHelp') ?>">Help</a></li>
      <li class="active"> Developer </li>
    </ul>      
      
  </div><!-- /Page header -->

   <div class="page-content-wrapper m-t">
      <div class="row">

        <div class="col-md-4">
          <?php $this->load->view('sximo/config/manual/developersidebar'); ?>
        </div>

        <div class="col-md-8" style="margin-bottom:50px;">

          <h2 >Introduction  </h2>
          <p><strong>SXIMO Builder</strong> is based on the Model-View-Controller development pattern. MVC is a software approach that separates application logic from presentation. In practice, it permits your web pages to contain minimal scripting since the presentation is separate from the PHP scripting.</p>
          <p><strong>The Model</strong> represents your data structures. Typically your model classes will contain functions that help you retrieve, insert, and update information in your database.</p>
          <p><strong>The View </strong>is the information that is being presented to a user. A View will normally be a web page, but in Sximo, a view can also be a page fragment like a header or footer. It can also be an RSS page, or any other type of "page".</p>
          <p><strong>The Controller</strong> serves as an intermediary between the Model, the View, and any other resources needed to process the HTTP request and generate a web page.
          </p>
          <div class="doc-line"></div>
          <div class="row">
            <div class="col-sm-6">
              <div class="padding-lg">
                <strong> Native Codeigniter 2.2 structure </strong>
                <ul class="list-unstyled">
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> application </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> system </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> user_guide </li>                        
                  <li><i style="color: #ddd" class="fa fa-file"></i> index </li>  
                  <li><i style="color: #ddd" class="fa fa-file"></i> licence </li>        
                </ul>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="padding-lg">  
              <strong> Sximo CRUD </strong>
                <ul class="list-unstyled">
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> application </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> database </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> sximo </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> system </li>
                  <li><i style="color: #FFCC00" class="fa fa-folder"></i> uploads </li>
                  <li><i style="color: #ddd" class="fa fa-file"></i> .htaccess </li>  
                  <li><i style="color: #ddd" class="fa fa-file"></i> change </li>
                  <li><i style="color: #ddd" class="fa fa-file"></i> logo.ico </li>
                  <li><i style="color: #ddd" class="fa fa-file"></i> index </li>
                  <li><i style="color: #ddd" class="fa fa-file"></i> licence </li>
                  <li><i style="color: #ddd" class="fa fa-file"></i> setting </li>
                </ul>
              </div>
            </div>

            <p>We have change folder structure , so it will ready to be application as on root or sub root application </p>
            <div class="doc-line"></div>
                
          </div>
        </div>

      </div>

   </div> <!-- page-content-wrapper -->

</div> <!-- /page-content-row -->
