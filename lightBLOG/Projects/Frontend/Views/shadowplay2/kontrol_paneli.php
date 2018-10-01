<?php Import::view(TEMA.'header');

 ?>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Bilgilerim')" id="defaultOpen">Bilgilerim</button>
  <button class="tablinks" onclick="openCity(event, 'Şifre Değiştir')">Şifre Değiştir</button>
  <button class="tablinks" onclick="openCity(event, 'Bitpazarı')">Bitpazarı</button>
  <button class="tablinks" onclick="openCity(event, 'İçerik Ekle')">İçerik Ekle</button>
</div>

<div id="Bilgilerim" class="tabcontent">
  <h3>BİLGİLERİM</h3>
  <form action="" method="post">
  <table>
  	<tr><td>Kayıt Tarihi</td><td> : <?php echo Afunc::tcevir($bilgi->kayit_tarihi) ?></td></tr>
  	<tr><td>Adı Soyadı</td><td><input type="text" name="isim" value="<?php echo $bilgi->isim ?>"></td></tr>
  	<tr><td>Mail Adresi</td><td>: <?php echo $bilgi->mail ?></td></tr>
  	<tr><td>Telefonu</td><td><input type="text" name="telefon" id="" value="<?php echo $bilgi->telefon ?>" ></td></tr>
<input type="hidden" name="b" value="bilgiguncelle">
  </table>
  <button type="submit"> Bilgilerimi Güncelle</button>
 </form>
</div>

<div id="Şifre Değiştir" class="tabcontent">
  <h3>ŞİFREMİ DEĞİŞTİR</h3>
   <form action="" method="post">
  <table>
  	<tr><td>Şifreniz</td><td><input type="text" name="sifre" value=""></td></tr>
  	<tr><td>Yeni Şifreniz</td><td><input type="password" name="yenisifre" id="" value="" ></td></tr>
  	<tr><td>Yeni Şifreniz Tekrar</td><td><input type="password" name="sifretekrar" id="" value="" ></td></tr>
<input type="hidden" name="b" value="sifreguncelle">
  </table>
  <button type="submit"> Şifremi Güncelle</button>
 </form> 
</div>

<div id="Bitpazarı" class="tabcontent">
  <h3>BİT PAZARI</h3>
<a href="#ilanekle"  rel="modal:open" class="btn btn-success">İlan Ver</a>
 
</div> 
<div id="İçerik Ekle" class="tabcontent">
  <h3>İÇERİK EKLE</h3>

  <button>İçerik Ekle</button>
</div> 
<?php import::view(TEMA.'popup/ilanekle'); Import::view(TEMA.'footer'); ?>