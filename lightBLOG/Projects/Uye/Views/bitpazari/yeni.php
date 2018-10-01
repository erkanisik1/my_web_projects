<?php Import::view('header') ?>
<div class="panel panel-primary">
  <div class="panel-heading">SATILIK ÜRÜN EKLE</div>
  <div class="panel-body">

  	
   
    <form action="" method="post" enctype="multipart/form-data">

    	<div class="form-group">
        	<label>İLAN BAŞLIĞI</label>
            <input type="text" class="form-control" name="baslik" placeholder="BAŞLIK">
        </div>

       <div class="form-group">
          <label>ÜRÜNÜN KATEGORİSİ</label>
          <div class="kat">
          <select name="kategori" class="form-control" id="kategori">
          	<option>Seçiniz..</option>
          	<option value="0" style="font-weight: bolder;color:#FF0000;">EŞYANIN KATEGORİSİ LİSTEDE YOK</option>
          	<?php foreach (ilankategori() as $key): ?>
          		<option value="<?php echo $key->ilankategori_id; ?>"><?php echo $key->kategori_adi; ?></option>
          	<?php endforeach ?>
          </select>	 
          </div>
          <div class="yenikategori" style="display: none;">
            <input type="text" name="yenikategori" value="" class="form-control" placeholder="Ürünün kategorisini yazın...">
          </div>
        </div>

     

         <div class="form-group">
          <label>İLAN AÇIKLAMASI</label>
           <textarea class="form-control" name="aciklama" rows="10"></textarea>
        </div>

           <div class="form-group">
          <label>ÜRÜNÜN DURUMU</label><br>
          <label><input type="radio" name="urun_durumu" value="İKİNCİ EL" checked> İKİNCİ EL</label>
          <label><input type="radio" name="urun_durumu" value="SIFIR"> SIFIR</label>
         
        </div>




        <div class="form-group">
          <label>İSTEDİĞİNİZ FİYAT</label>
            <input type="text" class="form-control" name="fiyat" placeholder="etiketlerin arasına virgül koyarak yazın...">
        </div>

         <div class="form-group">
          <label>RESİM YÜKLE <b>( Resimlerinizin isimlerinde türkçe karakter ve boşluk olmasın. Resimin boyutu 150KB'dan fazla olamaz. )</b></label>
            <input type="file" class="form-control" name="resim[]" value="" multiple>
        </div>

       

      <div class="form-actions">

        <button type="submit" class="btn btn-success btn-block">KAYDET</button>

      </div>

    </form>

  </div>
</div>

<?php Import::view('footer') ?>