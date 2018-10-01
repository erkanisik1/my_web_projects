<?php Import::view(TEMA.'header'); ?>


<h2>Aranan kelime: <b><?php echo method::post('ara'); ?></b></h2>


<?php

  foreach ($ara as $key) { 
?>

<div class="block">
<a href="<?php echo baseUrl().'konu/'.$key->id.'-'.$key->baslik_seo.'.html'; ?> ">
  <h2><p><?php echo $key->baslik;  ?></p></h2>
  <p>
    <span class="left"><img src="<?php echo Afunc::resimgoster($key->icerik); ?>" alt="" width="150" height="80"></span>
    <p style="color:#000;"><?php echo Afunc::kelimedenbol($key->icerik,'150'); ?></p>
  </p>
  </a>
</div>


      
<?php } ?> 


<?php Import::view(TEMA.'footer');?>