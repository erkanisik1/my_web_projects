 <?php if(!Session::select('login')){ ?>
 <h3>ÜYE GİRİŞİ</h3>
        <form action="" method="post">
          <input type="text" class="login" name="mail" value="" placeholder="Mail Adresiniz?">
          <input type="password" class="login" name="pass" value="" placeholder="Şifreniz?">
          <input type="submit" class="login" name="login" value="Giriş"> 
        </form>
        <p><a href="<?php echo baseUrl() ?>uye/sifremi_unuttum">Şifremi Unuttum</a> | <a href="<?php echo baseUrl() ?>uye/yeni_uye">Üye Ol</a></p>
        <?php }else{ ?>

<h3>ÜYE İŞLEMLERİ</h3>
<p>Merhaba:<?php echo Session::select('isim'); ?> </p>
<ul>
<li><a href="<?php echo baseUrl(); ?>uye/kontrol_paneli">Kontrol Paneli</a></li>
	
	<li><a href="<?php echo baseUrl(); ?>cikis ">Çıkış</a></li>
</ul>
        <?php } ?>