<?php Import::view(TEMA.'header'); ?>

  <h1><?php echo $icerik->baslik;  ?><br>

  	<p class="bilgi">
      <i class="fa fa-folder-open-o"></i>
      <a href="<?php echo baseUrl().'kategori/'.$icerik->kategori_id.'-'.Afunc::catname($icerik->kategori_id,1) ?> "><?php echo Afunc::catname($icerik->kategori_id); ?></a> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo aFunc::tcevir($icerik->tarih); ?> | <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $icerik->hit ?></p>

  </h1>

  <p><?php echo Afunc::decode($icerik->icerik); ?></p>

<a href="#" 
  onclick="
   window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  <img src="<?php echo baseUrl().TEMA_DIR; ?>style/facebookpaylasbuton.jpg" alt="">
</a>
<hr>
<?php if(Session::select('login')){ ?>
<h2>Yorum Yaz</h2>
<form action="#" method="post">
          <div class="form_settings">
            <p><span>Adınız Soyadınız</span><input type="text" name="isim" value=""></p>
            <p><span>Email Adresiniz</span><input type="text" name="mail" value=""></p>
            <p><span>Mesajınız</span><textarea rows="8" cols="50" name="mesaj"></textarea></p>
             <input type="hidden" name="currentdate" id="currentDate" value="">
            <input type="hidden" name="konu_id" value="<?php echo $icerik->id.'-'.$icerik->baslik_seo.'.html'; ?>">
           
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Gönder"></p>
          </div>
        </form>
<?php }else{ ?>
<h2>Yorum Yaz</h2>( Yorum yapabilmek için üye girişi yapmanız gerekemektedir. )
<?php } ?>
<?php  Import::view(TEMA.'footer');?>