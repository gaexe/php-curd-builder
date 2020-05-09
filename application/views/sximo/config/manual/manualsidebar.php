<div class="well">
	<h3> Manual Guide  </h3>
	<ul class="docs" >
		<li><a  @if($active =='index') class="active" @endif href="<?php echo site_url('sximo/config/getManual') ?>"><i class="icon-arrow-right3"></i> Getting Started  </a></li>
		<li><a @if($active =='staticpage') class="active" @endif
		href="<?php echo site_url('sximo/config/getManual/staticpage') ?>"><i class="icon-arrow-right3"></i> Pages Section  </a></li>
		<li><a @if($active =='module') class="active" @endif
		href="<?php echo site_url('sximo/config/getManual/module') ?>"><i class="icon-arrow-right3"></i>  Module Section</a>
		<ul>
				
		 <li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#create-module"><i class="icon-arrow-right3"></i> Create Module </a></li>			
		 <li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-module"><i class="icon-arrow-right3"></i> Edit Module </a></li>			
		 <li><a href="#tut-info"><i class="icon-arrow-right3"></i> Basic Info </a></li>
		 <li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-sql"><i class="icon-arrow-right3"></i> MySQL Editor </a></li>
		 <li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-table"><i class="icon-arrow-right3"></i> Grid Table Setting </a></li>
		 <li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-form"><i class="icon-arrow-right3"></i> Form Setting </a>
		 </li><li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-master"><i class="icon-arrow-right3"></i> Master Detail </a>
		 </li><li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-permission"><i class="icon-arrow-right3"></i> Permission </a>
		 </li><li><a href="<?php echo site_url('sximo/config/getManual/module') ?>#edit-rebuild"><i class="icon-arrow-right3"></i> Rebuild </a></li>
		 </ul>
		</li>	
	
		<li><a @if($active =='menu') class="active" @endif
		href="<?php echo site_url('sximo/config/getManual/menu') ?>"><i class="icon-arrow-right3"></i> Menu Section  </a></li>
		<li><a @if($active =='backup') class="active" @endif
		href="<?php echo site_url('sximo/config/getManual/backup') ?>"><i class="icon-arrow-right3"></i> Backup And Install</a></li>
	</ul>
	<h3> Developer Guide  </h3>
	<a href="<?php echo site_url('sximo/config/getDeveloper') ?>" class="btn btn-info" style="width:100%;"> Developer Guide </a>
</div>