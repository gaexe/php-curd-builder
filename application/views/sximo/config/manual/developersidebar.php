<div class="well">
  <h3> Developer Guide  </h3>
  <ul class="docs" >
    <li><a  @if($active =='index') class="active" @endif href="<?php echo site_url('sximo/config/getDeveloper') ?>"><i class="icon-arrow-right3"></i> Introduction </a></li>   
    <li><a @if($active =='module') class="active" @endif
    href="<?php echo site_url('sximo/config/getDeveloper/devmodulestructure') ?>"><i class="icon-arrow-right3"></i> Module Structure   </a>
      <ul>          
        <li><a href="<?php echo site_url('sximo/config/getDeveloper/devcontroller') ?>"><i class="icon-arrow-right3"></i> Controller </a></li>      
        <li><a href="<?php echo site_url('sximo/config/getDeveloper/devmodel') ?>"><i class="icon-arrow-right3"></i> Models </a></li>
        <li><a href="<?php echo site_url('sximo/config/getDeveloper/devgrid') ?>"><i class="icon-arrow-right3"></i> Views/index.php </a></li>
        <li><a href="<?php echo site_url('sximo/config/getDeveloper/devform') ?>"><i class="icon-arrow-right3"></i> Views/form.php </a></li>
        <li><a href="<?php echo site_url('sximo/config/getDeveloper/devview') ?>"><i class="icon-arrow-right3"></i> Views/view.php </a></li>       
      </ul>
    </li> 
      <li><a @if($active =='staticpage') class="active" @endif
      href="<?php echo site_url('sximo/config/getManual/devlayout') ?>"><i class="icon-arrow-right3"></i>  Layout Template  </a></li>
      <li><a @if($active =='staticpage') class="active" @endif
      href="<?php echo site_url('sximo/config/getManual/devclasssession') ?>"><i class="icon-arrow-right3"></i>  Class & Session  </a></li>
  </ul>
  <h3> Manual Guide  </h3>
  <a href="<?php echo site_url('sximo/config/getManual') ?>" class="btn btn-info" style="width:100%;"> Manual Guide </a>  
</div>

