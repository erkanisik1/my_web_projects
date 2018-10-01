<?php IMPORT::view('header'); ?>

<div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        	<h5>YENİ DUYURU EKLE </h5>
        </div>
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            
	            <div class="control-group">
		            <label class="control-label">DUYURU:</label>
		            <div class="controls">
		                <textarea class="span11" id="editor" name="duyuru" rows="5"></textarea>
		            </div>
	            </div>

	            <div class="form-actions">
		            <button type="submit" class="btn btn-success btn-block">DUYURUYU KAYDET</button>
	            </div>
            </form>
       	</div>
    </div>





<?php Import::view('footer'); ?>