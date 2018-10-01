<?php IMPORT::view('header'); ?>
	<div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        	<h5>YENİ KATEGORİ </h5>
        </div>
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            <div class="control-group">
		            <label class="control-label">Üst Kategori :</label>
		            <div class="controls">
		            	<select name="ustkategori" class="span11">
		            		<option value="">Seçiniz</option>
		            		<?php echo yonetimKategori(); ?>
		            	</select>
		            </div>
	            </div>
            	<div class="control-group">
		            <label class="control-label">Kategori Adı:</label>
		            <div class="controls">
		                <input type="text" class="span11" name="kategori" placeholder="Mağaza adı">
		            </div>
	            </div>
	            <div class="form-actions">
		            <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
	            </div>
            </form>
       	</div>
    </div>
<?php Import::view('footer'); ?>