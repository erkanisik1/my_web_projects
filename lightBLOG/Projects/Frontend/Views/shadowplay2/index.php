
<?php import::view(THEME.'header'); ?> 

<?php foreach ($icerik as $key) {  ?>
  <div class="block">
    <a href="<?php echo '/konu/'.$key->id.'-'.$key->baslik_seo.'.html'; ?> ">
    <h1><?php echo $key->baslik;  ?></h1>
    <p>
      <span class="left"><img src="<?php echo Afunc::resimgoster($key->icerik); ?>" alt="" width="150" ></span>
      <p style="color:#000;"><?php echo Afunc::kelimedenbol($key->icerik,'150'); ?></p>
    </p>
    </a>
  </div>
<?php } ?> 

<!-- 
  <div class="pagi">
    <?php echo Pagination::start(URI::get('row'))->limit(10)->countLinks(5)->create(); ?>
  </div> -->

<?php  import::view(THEME.'footer'); ?>