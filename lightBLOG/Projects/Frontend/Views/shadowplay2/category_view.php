<?php Import::view(TEMA.'header'); ?>



<h1>CATEGORY: <?php echo category($katid)->name; ?></h1>

<?php  foreach ($content as $key) { ?>



<div class="block">

<a href="<?php echo baseUrl().'article/'.$key->title_seo.'.html'; ?> ">

  <h1><?php echo $key->baslik;  ?></h1>

  <p>

    <span class="left"><img src="<?php echo Afunc::resimgoster($key->icerik); ?>" alt="" width="150" height="80"></span>

    <p style="color:#000;"><?php echo Afunc::kelimedenbol($key->icerik,'150'); ?></p>

  </p>

  </a>

</div>

      

<?php } Import::view(TEMA.'footer');?>