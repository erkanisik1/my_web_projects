<?php   if(!Session::select('userid')){redirect('admin/login'); }?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo settings('site_name') ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php $d = rand(); ?>
<link rel="stylesheet" href="<?php echo ADMIN ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/datepicker.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/select2.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/my.css" />
<link href="<?php echo ADMIN ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo ADMIN ?>css/jquery.gritter.css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo ADMIN ?>css/bootstrap-wysihtml5.css" />
<!--  <script src="<?php echo ADMIN; ?>js/jquery.min.js"></script> -->
<!-- <script src="<?php echo ADMIN; ?>js/jquery1102.min.js"></script> --> 
<?php Import::script('jquery','tinymce/tinymce.min');  ?>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<?php Import::view('editor'); ?>
</head>
<body>

<!--Header-part-->
<div id="header">
  <span style="width: 99%; line-height: 77px;" >
  	<a href="<?php echo baseUrl(); ?>" style="text-align: center;color:#fff;font-size: 1.5em;"><?php echo settings('site_name') ?> ADMIN</a>
  </span>
</div>
<!--close-Header-part--> 
<?php 
	IMPORT::view('navbar'); 
  	Import::view('sidebarmenu'); 

?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> </div>
  
</div>
<div class="container-fluid">
<div class="row-fluid">