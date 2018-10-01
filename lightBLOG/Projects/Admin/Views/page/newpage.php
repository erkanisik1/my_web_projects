<?php Import::view('header') ?>


  <div id="breadcrumb"> <a href="<?php echo baseUrl().'yonetim'; ?>" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> YÖNETİM PANELİ</a> 

  <a href="<?php echo baseUrl().'yonetim/sayfa' ?> " class="tip-bottom" data-original-title="">SAYFA</a>

  <a href="#" class="current">EKLE</a> </div>

  



<div class="container-fluid">

<div class="row-fluid">



<div class="widget-box">

        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>

          <h5>Sayfa Ekle</h5>

        </div>

        <div class="widget-content nopadding">

          <form action="" method="post" class="form-horizontal">



            <div class="control-group">

              <label class="control-label">Başlık :</label>

              <div class="controls">

                <input type="text" class="span11" name="title" placeholder="BAŞLIK">

              </div>

            </div>



             <div class="control-group">

              <label class="control-label">İçerik :</label>

              <div class="controls">

               <textarea class="span11" id="editor" name="content" rows="30"></textarea>

                

              </div>



    

          

            <div class="form-actions">

              <button type="submit" class="btn btn-success btn-block">SAYFAYI KAYDET</button>

            </div>

          </form>

        </div>

      </div>

</div>

</div>

<?php Import::view('footer') ?>