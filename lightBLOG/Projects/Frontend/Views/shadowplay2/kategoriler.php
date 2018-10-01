<?php Import::view(TEMA.'header'); ?>
<h1>TÜM KATEGORİLER</h1>
<?php  foreach ($icerik as $key) { ?>

<div class="block">
<a href="<?php echo baseUrl().'kategori/'.$key->id; ?> ">
 <?php echo $key->kategori;  ?>
 
  </a>
</div>
      
<?php } Import::view(TEMA.'footer');?>