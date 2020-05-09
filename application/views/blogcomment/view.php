<div class="page-content row">
  <!-- Page header -->
  <div class="page-header">
    <div class="page-title">
      <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
    </div>
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
      <li><a href="<?php echo site_url('blogcomment') ?>"><?php echo $pageTitle ?></a></li>
      <li class="active"> Detail </li>
    </ul>
  </div>  
  
   <div class="page-content-wrapper m-t">   
  
    <div class="sbox" >
      <div class="sbox-title" >
        <h5><?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h5>
      </div>
      <div class="sbox-content" >

      <div class="table-responsive">
          <table class="table table-striped table-bordered" >
            <tbody>  
          
					<tr>
						<td width='30%' class='label-view text-right'>Post By</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['user_id'],'user_id','1:tb_users:id:email') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Post Title</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['blogID'],'blogID','1:tb_blogs:blogID:title') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comment</td>
						<td><?php echo $row['comment'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Created</td>
						<td><?php echo $row['created'] ;?> </td>
						
					</tr>
				
            </tbody>  
          </table>    
        </div>
      </div>
    </div>
  </div>
  
</div>
    