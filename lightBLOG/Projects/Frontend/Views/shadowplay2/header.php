<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <title><?php if(defined('title')){echo title;}else{echo settings('site_name');}  ?></title>

  <meta name="description" content="<?php if(defined('desc')){echo desc;}else{echo settings('description');}  ?> " />
  <meta name="keywords" content="<?php if(defined('keywords')){echo keywords;}else{echo settings('keywords');}  ?>" />
  <link rel="image_src" href="<?php if(defined('img')){echo img;}  ?>"/>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo baseUrl() ?>images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo baseUrl() ?>images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo baseUrl() ?>images/favicon/favicon-16x16.png">
  <link rel="manifest"  href="<?php echo baseUrl() ?>images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo baseUrl() ?>images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="img_src" href="<?php if(defined('img')){echo img;} ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_DIR; ?>style/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_DIR; ?>style/my.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://use.fontawesome.com/6260a742cc.js"></script>
  <script src="<?php echo THEME_DIR; ?>style/main.js"></script>

  <?php 
    import::script('myscript');
    import::script('jquery.modal.min');
    import::style('jquery.modal.min'); 
  ?>


</head> 


<body>

  <div id="main">

    <div id="header">

      <div id="logo">

        

      </div>

      <div id="menubar">
        <nav id="primary_nav_wrap" >
          <ul style="z-index: 2;">
            <li><a href="<?php echo baseUrl(); ?> "><?php echo ML::select('home'); ?></a></li>
            <li><a href="<?php echo baseUrl(); ?>iletisim"><?php echo ML::select('contact'); ?></a></li>
            <?php if (Session::select('login')){ ?>
              <li style="background: #00C5EE;"><a href="<?php echo baseUrl('user'); ?>" >PANELİM</a></li>
               <li style="background: #00C5EE;"><a href="<?php echo baseUrl('user/login/cikis'); ?>" ><?php echo ML::select('logout'); ?> </a></li>
            <?php }else{ ?>
            <li style="background: #00C5EE;"><a href="<?php echo baseUrl('user'); ?>" style="color:#000"><?php echo ML::select('login'); ?></a></li>
            <li><a href="<?php echo baseUrl('user/login/yeni'); ?>"><?php echo ML::select('register'); ?></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <?php import::view(THEME.'sidebar'); ?>
        <div id="content">



     
</div>

      <?php //echo Afunc::breadcrumbs(); ?>