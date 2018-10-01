<?php Import::view('header') ?>
<div class="panel panel-primary">
  <div class="panel-heading">ÜRÜN DÜZENLE</div>
  <div class="panel-body">
 
  	
   
    <form action="" method="post" enctype="multipart/form-data">

    	<div class="form-group">
        	<label>İLAN BAŞLIĞI</label>
            <input type="text" class="form-control" name="baslik" value="<?php echo $dzn->baslik ?>">
        </div>

       <div class="form-group">
          <label>ÜRÜNÜN KATEGORİSİ</label>
          <div class="kat">
          <select name="kategori" class="form-control" id="kategori">
          	<option>Seçiniz..</option>
          	<option value="0" style="font-weight: bolder;color:#FF0000;">EŞYANIN KATEGORİSİ LİSTEDE YOK</option>
          	<?php foreach (ilankategori() as $key): ?>
          		<option value="<?php echo $key->ilankategori_id; ?>"
                <?php selected($key->ilankategori_id,$dzn->kategori); ?>

                ><?php echo $key->kategori_adi; ?></option>
          	<?php endforeach ?>
          </select>	 
          </div>
          <div class="yenikategori" style="display: none;">
            <input type="text" name="yenikategori" value="" class="form-control" placeholder="Ürünün kategorisini yazın...">
          </div>
        </div>

     

         <div class="form-group">
          <label>İLAN AÇIKLAMASI</label>
           <textarea class="form-control" name="aciklama" rows="10"><?php echo $dzn->aciklama ?></textarea>
        </div>

           <div class="form-group">
          <label>ÜRÜNÜN DURUMU</label> :
          <label><input type="radio" name="urun_durumu" value="İKİNCİ EL" <?php checked('İKİNCİ EL', $dzn->urundurum); ?>> İKİNCİ EL</label>
          <label><input type="radio" name="urun_durumu" value="SIFIR" <?php checked('SIFIR',$dzn->urundurum); ?>> SIFIR</label>
         
        </div>




        <div class="form-group">
          <label>İSTEDİĞİNİZ FİYAT</label> :
            <input type="text" class="" name="fiyat" value="<?php echo $dzn->fiyat; ?>">.TL
        </div>

         <div class="form-group">
          <label>RESİM YÜKLE</label>
            <input type="file" class="form-control" name="resim" value="" multiple placeholder="Yazı hakkında kısa bir açıklama yazın">
        </div>


         <div class="form-group">
          <label>YÜKLENMİŞ RESİMLER</label><br>
            <?php foreach (resimler($dzn->id) as $key): ?>
              <div class="bitpazari_blok">
              <img src="<?php echo baseUrl($key->link) ?>" alt="" width="100">
              <br>
              <label><input type="checkbox" name="res[]" value="<?php echo $key->resimid ?>"> (Silmek için tıklayın)</label>
            </div>
            <?php endforeach ?>
        </div>


       

      <div class="form-actions">

        <button type="submit" class="btn btn-success btn-block">KAYDET</button>

      </div>

    </form>

  </div>
</div>

<?php Import::view('footer') ?>