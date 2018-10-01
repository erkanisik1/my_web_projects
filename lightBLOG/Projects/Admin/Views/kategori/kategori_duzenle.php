<?php IMPORT::view('header'); ?>

<div class="widget-box">
	<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
		<h5>KATEGORİ DÜZENLE</h5>
	</div>
	<div class="widget-content nopadding">
		<form action="" method="post" class="form-horizontal">

			<div class="control-group">
				<label class="control-label">Üst Kategori :</label>
				<div class="controls">
					<select name="ust_kategori_id" id="" class="span11">
						<option value="0">ANA KATEGORİ</option>
						<?php foreach (yFunc::ykat() as $key): ?>
							<option value="<?php echo $key->id; ?>"  <?php echo $key->id == $duzenle->ust_kategori_id? 'selected':'';?> ><?php echo $key->kategori; ?></option>
						<?php endforeach ?>

					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Kategori Adı:</label>
				<div class="controls">
					<input type="text" class="span11" name="kategori" value="<?php echo $duzenle->kategori ?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Kategori Durumu:</label>
				<div class="controls">
					<select name="durum" id="">
						<option value="1" <?php echo '1' == $duzenle->durum? 'selected':'';?> >Aktif</option>
						<option value="0" <?php echo '0' == $duzenle->durum? 'selected':'';?>>Pasif</option>
					</select>
				</div>
			</div>

			<div class="form-actions">
				<input type="hidden" name="id" value="<?php echo $duzenle->id; ?> " >
				<button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
			</div>
		</form>
	</div>
</div>


<?php Import::view('footer'); ?>