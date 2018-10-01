<?php IMPORT::view('header'); ?>

<div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        	<h5>DUYURU DÜZENLE </h5>
        </div>
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            
	            <div class="control-group">
		            <label class="control-label">DUYURU:</label>
		            <div class="controls">
		                <textarea class="span11" name="duyuru" rows="5"><?php echo $dzn->duyuru ?></textarea>
		            </div>
	            </div>
	            <div class="control-group">
		            <label class="control-label">Durumu:</label>
		            <div class="controls">
		                <select name="durum" class="span11" id="">
		                	<option value="">Seçiniz...</option>
		                	<option value="1" <?php echo $dzn->durum == 1?'selected':''; ?>>AKTİF</option>
		                	<option value="0" <?php echo $dzn->durum == 0?'selected':''; ?>>PASİF</option>
		                </select>
		            </div>
	            </div>
	            

	            <div class="form-actions">
	            	<input type="hidden" name="id" value="<?php echo $dzn->id; ?>">
		            <button type="submit" class="btn btn-success btn-block">DUYURUYU KAYDET</button>
	            </div>
            </form>
       	</div>
    </div>
    <div class="pull-right"><a href="<?php echo baseUrl('yonetim/duyuru/sil/'.$dzn->id); ?>"><button class="btn btn-large btn-danger">SİL</button></a></div>
<?php Import::view('footer'); ?>