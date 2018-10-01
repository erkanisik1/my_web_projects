<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php if(defined('desc')){echo desc;}else{echo settings('description');}  ?>">
     <meta name="keywords" content="<?php if(defined('keywords')){echo keywords;}else{echo settings('keywords');}  ?>" />
    <meta name="author" content="Erkan Işık">

    <title><?php if(defined('title')){echo title;}else{echo settings('site_name');}  ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo THEME_DIR; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo THEME_DIR; ?>assets/css/blog-home.css" rel="stylesheet">

  </head>

  <body>
    <?php import::view(THEME.'nav_top'); ?>

   <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">  <?php echo ml::select('homq'); ?>