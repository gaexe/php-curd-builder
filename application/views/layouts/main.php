<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo  CNF_APPNAME ;?></title>
<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/bootstrap/css/bootstrap.css" type="text/css"  />	
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<?php if( $this->session->userdata('themes') =='sximo' or  $this->session->userdata('themes')  =='')  { ?>
		<link href="<?php echo base_url('sximo/css/sximo.css');?>" rel="stylesheet">	
		<?php } else { ?>
		<link href="<?php echo base_url('sximo/css/'.$this->session->userdata('themes').'.css') ;?>" rel="stylesheet">	
		<?php } ?>

<link rel="stylesheet" href="<?php echo base_url();?>sximo/css/icons.min.css" type="text/css"  />
<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>sximo/fonts/awesome/css/font-awesome.min.css" type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/iCheck/skins/square/green.css" type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/markitup/skins/simple/style.css" type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/markitup/sets/default/style.css" type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/fancybox/jquery.fancybox.css" type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url();?>sximo/js/plugins/toastr/toastr.css" type="text/css"  />
	
<script src="<?php echo base_url();?>sximo/js/plugins/jquery.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/select2/select2.min.js"></script>

<script src="<?php echo base_url();?>sximo/js/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/prettify.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/fancybox/jquery.fancybox.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/prettify.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/parsley.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/jquery.jCombo.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/bootstrap.summernote/summernote.min.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/toastr/toastr.js"></script>

<script src="<?php echo base_url();?>sximo/js/plugins/markitup/jquery.markitup.js"></script>
<script src="<?php echo base_url();?>sximo/js/plugins/markitup/sets/default/set.js"></script>


<script src="<?php echo base_url();?>sximo/js/sximo.js"></script>
		<script language="javascript">
		jQuery(document).ready(function($)	{
		   $('.markItUp').markItUp(mySettings );
		});
		</script>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->	


</head>

<body class="sxim-init" >
<div id="wrapper">
	<?php $this->load->view('layouts/sidemenu');?>
	<div class="gray-bg " id="page-wrapper">
		<?php $this->load->view('layouts/headmenu');?>
		<?php echo $content ;?>		
	</div>
</div>

<div class="modal fade" id="sximo-modal" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header bg-default">
		
		<button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Modal title</h4>
	</div>
	<div class="modal-body" id="sximo-modal-content">

	</div>

  </div>
</div>
</div>

<div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cogs fa-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">Select Color Schema</div>
            <div class="setings-item">
                    <ul>
	                    <li><a href="<?php echo site_url('page/skin/sximo') ;?>"> Default Skin  <span class="pull-right default-skin"> </span></a></li> 
	                    <li><a href="<?php echo site_url('page/skin/sximo-dark-blue') ;?>"> Dark Blue Skin <span class="pull-right dark-blue-skin"> </span> </a></li> 
	                    <li><a href="<?php echo site_url('page/skin/sximo-light-blue') ;?>"> Light Blue Skin <span class="pull-right light-blue-skin"> </span> </a></li> 
	                   
                    </ul>

                
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$('#sidemenu').sximMenu();	
		$('.spin-icon').click(function () {
	        $(".theme-config-box").toggleClass("show");
	    });

	});		
  
<?php 
if( $msg = $this->session->flashdata("message")){
?>  
  toastr["<?php echo $msg['type'] ?>"]("<?php echo $msg['caption'] ?>","<?php echo $msg['title'] ?>"); 
<?php 
}
?>
  
</script>
</body>
</html>
