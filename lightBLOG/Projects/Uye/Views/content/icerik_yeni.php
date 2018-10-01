<?php Import::view('header') ?>
<div class="panel panel-primary">
  <div class="panel-heading">İçerik Ekle</div>
  <div class="panel-body">
   
    <form action="" method="post">

       <div class="form-group">
          <label>Yazının Kategorisi</label>
            <select name="kategori" id="" class="form-control">
              <option value="">Yazının kategorinisi seçiniz...</option>
              <?php echo yfunc::KategoriListesi(); ?>
            </select>
        </div>

        <div class="form-group">
          <label>Yazının Başlığı</label>
            <input type="text" class="form-control" name="baslik" placeholder="BAŞLIK">
        </div>

         <div class="form-group">
          <label>İçerik</label>
           <textarea class="form-control" id="editor" name="icerik" rows="30"></textarea>
        </div>



        <div class="form-group">
          <label>Yazının Etiketleri</label>
            <input type="text" class="form-control" name="keywords" placeholder="etiketlerin arasına virgül koyarak yazın...">
        </div>

         <div class="form-group">
          <label>Kısa Açıklama</label>
            <input type="text" class="form-control" name="description" value="" placeholder="Yazı hakkında kısa bir açıklama yazın">
        </div>

         <div class="form-group">
          <label>ANASAYFADA GÖSTERİLSİNMİ</label>
            <select name="anasayfa" id="" class="form-control">

        <option value="1">EVET</option>

        <option value="0">HAYIR</option>

      </select>
        </div>

      <div class="form-actions">

        <button type="submit" class="btn btn-success btn-block">KAYDET</button>

      </div>

    </form>

  </div>
</div>

<?php Import::view('footer') ?>