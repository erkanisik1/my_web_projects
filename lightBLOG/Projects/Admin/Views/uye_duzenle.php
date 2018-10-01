<?php Import::view('header') ?>

<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>GÜNCELLE: <?php echo $dzn->isim ?></h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">

            <div class="control-group">
              <label class="control-label">İSİM :</label>
              <div class="controls">
                <input type="text" class="span11" name="isim" value="<?php echo $dzn->isim ?> " >
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Rumuz :</label>
              <div class="controls">
                <input type="text" class="span11" name="rumuz" value="<?php echo $dzn->rumuz ?> ">
                
              </div>

               
            <div class="control-group">
              <label class="control-label">Mail :</label>
              <div class="controls">
                <input type="text" class="span11" name="mail" value="<?php echo $dzn->mail ?> ">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Telefon :</label>
              <div class="controls">
                <input type="text" class="span11" name="telefon" value="<?php echo $dzn->telefon ?> ">
              </div>
            </div>
          
            <div class="form-actions">
            <input type="hidden" name="kullanici_id" value="<?php echo $dzn->kullanici_id; ?>">
              <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
          </form>
        </div>
      </div>
<?php Import::view('footer') ?>