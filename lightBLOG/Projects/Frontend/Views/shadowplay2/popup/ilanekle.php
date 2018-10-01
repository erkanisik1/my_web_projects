 <style>
   input[type='text']{
    width: 100%;
    margin-bottom: 10px;
    padding: 5px;
   }
   .control-label{
    font-weight: bolder;
    font-size: 14px;
   }
   textarea{
    width: 100%;
   }
 </style>
<!-- yeni menü Modal Başlangıcı -->
<div id="ilanekle" class="modal" style="display: none;">
  <div class="modal-header">
    <h3>Yeni İlan Kayıt Formu</h3>
  </div>
  <div class="modal-body">
   <form action="" enctype="multipart/form-data" method="post">
    <div class="control-group">
      <label class="control-label">İlan Başlığı :</label>
      <div class="controls">
        <input type="text" class="span11" name="baslik">        
      </div>
    </div>

     <div class="control-group">
      <label class="control-label">İlan Açıklaması :</label>
      <div class="controls">
        <textarea name="aciklama" id="editor" cols="30" rows="10"></textarea>       
      </div>
    </div>

     <div class="control-group">
      <label class="control-label">İlan Resimleri :</label>
      <div class="controls">
        
 Resimleri Seçin : <input name="img[]" size="35" type="file" multiple/><br/>
      </div>
    </div>

    <div class="form-actions">
      <button type="submit" name="urunekle" value="1" class="btn btn-success span11">Kaydet</button>
    </div>
  </form> 
</div>
</div>
<!-- yeni menü Modal sonu -->