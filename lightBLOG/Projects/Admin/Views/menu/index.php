<?php import::view('header'); ?>

<style>.yazi{height:140px;overflow: auto;}</style>

<a href="#myModal" data-toggle="modal" class="btn btn-success">Yeni Menü</a> <hr>

<!-- yeni menü Modal Başlangıcı -->

<div id="myModal" class="modal hide" aria-hidden="true" style="display: none;">

  <div class="modal-header">

    <h3>Menu Kayıt Formu</h3>

  </div>

  <div class="modal-body">

   <form action="" method="post">

    <div class="control-group">

      <label class="control-label">Menü Adı :</label>

      <div class="controls">

        <input type="text" class="span11" name="menu_name" placeholder="Menu Adı...">

        <input type="hidden" name="popup" value="1">

      </div>

    </div>

    <div class="form-actions">

      <button type="submit" class="btn btn-success span11">Kaydet</button>

    </div>

  </form> 

</div>

</div>

<!-- yeni menü Modal sonu -->

<form action="" method="post">

  <div class="row-fluid">
   <div class="span4">
    <div class="accordion" id="collapse-group">

    <!-- page -->
    <div class="accordion-group widget-box">
       <div class="accordion-heading">
        <div class="widget-title"> 
         <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse" class="collapsed"> 
          <span class="icon"><i class="icon-ok"></i></span>
          <h5>Sayfalar</h5>
        </a> 
      </div>
    </div>
    <div class="accordion-body collapse" id="collapseGOne" style="height: 0px;">
     <div class="widget-content">
      <div class="yazi">
        <?php foreach (pagelist() as $key): ?>
          <label><input type="checkbox" name="pages[]" value="<?php echo $key->title.'&/page/'.$key->id.'-'.$key->titleSeo; ?>"><?php echo $key->title; ?></label>
        <?php endforeach ?> </div><br>
        <input type="submit" name="page_submit" value="Menüye Ekle">
      </div>
    </div>
  </div>
  <!-- /page -->
  <!-- yazilar -->
  <div class="accordion-group widget-box">
    <div class="accordion-heading">
      <div class="widget-title"> 
       <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse" class="collapsed"> 
        <span class="icon"><i class="icon-ok"></i></span>
        <h5>Yazılar</h5>
      </a> 
    </div>
  </div>
  <div class="accordion-body collapse" id="collapseGOne" style="height: 0px;">
    <div class="widget-content">
      <div class="yazi">
        <?php foreach (yFunc::yazilar() as $key): ?>
          <label><input type="checkbox" name="yazilar[]" value="<?php echo $key->baslik.'&/konu/'.$key->id.'-'.$key->baslik_seo; ?>"><?php echo $key->baslik; ?></label>
        <?php endforeach ?> </div><br>
        <input type="submit" name="yazi_submit" value="Menüye Ekle">
      </div>
    </div>
  </div>
  <!-- /yazilar -->
  <!-- category -->
  <div class="accordion-group widget-box">
    <div class="accordion-heading">
      <div class="widget-title"> 
        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
          <h5>Kategoriler</h5>
        </a> 
      </div>
    </div>

    <div class="collapse accordion-body" id="collapseGTwo">
      <div class="widget-content"> 
        <div class="yazi">
          <?php foreach (yFunc::kategoriler() as $key): ?>
            <label><input type="checkbox" name="kategoriler[]" value="<?php echo 'kategori/'.$key->id.'-'.$key->kat_seo; ?>"><?php echo $key->kategori; ?></label>
          <?php endforeach ?>
        </div><br>
        <input type="submit" name="kategori_submit" value="Menüye Ekle">
      </div>
    </div>
  </div>
  <!-- category -->
</div>
</div>



  <div class="span4">
    <div class="control-group">
      <label class="control-label">Menüyü Seç:</label>
      <div class="controls">
       <select name="menucat" id="">
         <option value="">Seçiniz...</option>
         <?php foreach (menuname() as $key): ?>
           <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
         <?php endforeach ?>
       </select>
     </div>
   </div>
  </div>

</div>

</form>



<?php import::view('footer'); ?>