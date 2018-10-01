<?php Import::view('header') ?>

<style>
  .ustkat{
    color:#000;
    font-weight: bolder;
  }
</style>



<div class="widget-box">

        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>

          <h5>GÜNCELLE: <?php echo $dzn->baslik ?></h5>

        </div>

        <div class="widget-content ">
          <form action="" method="post" class="form-horizontal">

            <div class="control-group">
              <p>Başlık </p>
              <input type="text" class="span11" name="baslik" value="<?php echo $dzn->baslik ?> " placeholder="BAŞLIK">
            </div>

            <div class="control-group">
              <p>Yazının Kategorisi </p><?php echo $dzn->kategori_id; ?>
              <select name="kategori" id="" class="span11">
                <option value="">Yazının kategorinisi seçiniz...</option>
               <?php foreach (contentKat() as $key): ?>
                <option class="ustkat" value="<?php echo $key->id; ?>" <?php echo $key->id == $dzn->kategori_id?'selected':''; ?>><?php echo $key->kategori; ?></option>
                 <?php foreach (contentKat($key->id) as $key): ?>
                     <option value="<?php echo $key->id; ?>" <?php echo $key->id == $dzn->kategori_id?'selected':''; ?>>--<?php echo $key->kategori; ?></option>
                 <?php endforeach ?>
               <?php endforeach ?>
      </select>
            </div>
            
            <div class="control-group">
              <p>İçerik :</p>
              <textarea  id="editor" name="icerik" rows="30"><?php echo $dzn->icerik; ?> </textarea>
            </div>
            
            <div class="control-group">
              <p>Etiketler : ( Etiketleri aralarına virgül koyarak yazın. )</p>
             <input type="text" class="span11" name="keywords" value="<?php echo $dzn->keywords ?> " placeholder="">
            </div>
            
            <div class="control-group">
              <p>Kısa Açıklama : </p>
             <input type="text" class="span11" name="description" value="<?php echo $dzn->description ?> " placeholder="">
            </div>

            <div class="control-group">
              <p>Anasayfada Gösterilsinmi? :</p>
               <select name="anasayfa" id="" class="span11">
                  <option value="1">EVET</option>
                  <option value="0">HAYIR</option>
                </select>
            </div>

            <div class="form-actions">
            <input type="hidden" name="id" value="<?php echo $dzn->id; ?>">

              <button type="submit" class="btn btn-success btn-block">Güncelle</button>

            </div>

          </form>

        </div>

      </div>



<?php Import::view('footer') ?>