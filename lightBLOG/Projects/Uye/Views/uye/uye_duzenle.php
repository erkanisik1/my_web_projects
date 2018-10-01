<?php import::view('header'); ?>
      
<div class="panel panel-primary">
  <div class="panel-heading">Üyelik Bilgilerim</div>
  <div class="panel-body">

    
   
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Kullanıcı Adı</label>
            <input type="text" class="form-control" name="isim" value="<?php echo $dzn->isim ?>" >
        </div>

           <div class="form-group">
            <label>Rumuz</label>
            <input type="text" class="form-control" name="rumuz" value="<?php echo $dzn->rumuz ?>" >
        </div>
     
     

         <div class="form-group">
          <label>Mail Adresi</label>
          <input type="text" class="form-control" name="mail" value="<?php echo $dzn->mail ?>" >
        </div>

           <div class="form-group">
          <label>İlçe</label><br>
          <input type="text" class="form-control" name="ilce" value="<?php echo $dzn->ilce ?>" >
        </div>




        <div class="form-group">
          <label>İl</label>
            <input type="text" class="form-control" name="il" value="<?php echo $dzn->il ?>" >
        </div>

            <div class="form-group">
          <label>Telefon</label>
            <input type="text" class="form-control" name="telefon" value="<?php echo $dzn->telefon ?>" >
        </div>

       

      <div class="form-actions">

        <button type="submit" class="btn btn-success btn-block">KAYDET</button>

      </div>

    </form>

  </div>
</div>

<?php import::view('footer'); ?>