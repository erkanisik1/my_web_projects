<?php IMPORT::view('header'); ?>

		<div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Üyeler</h5>

	          <div class="pull-right" style="margin:5px;"><a href="/yonetim/uye/yeni "><button>YENİ uye</button> </a></div>
	        </div>
        	<div class="widget-content nopadding">
        	<table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Üyelik tarihi</th>
                  <th>Üye İsmi</th>
                  <th>Üye rumuz</th>
                  <th>Üye mail</th>
                  <th>Üye telefon</th>
                  <th width="80">İşlemler</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($uyelist as $key ) { ?>
                <tr>
                <td><?php echo yFunc::tcevir($key->kayit_tarihi); ?></td>
                <td><?php echo $key->isim; ?></td>
                <td><?php echo $key->rumuz; ?></td>
                <td><?php echo $key->mail; ?></td>
                <td><?php echo $key->telefon; ?> </td>
                  
                  <td class="islemler" style="text-align: center;">
                    <a href="/yonetim/uye/duzenle/<?php echo $key->kullanici_id; ?>"><i class="icon-pencil"></i></a>
                    <a href="/yonetim/uye/sil/<?php echo $key->kullanici_id; ?>"><i class="icon-remove"></i></a>
                  </td>
                </tr>
               <?php } ?>
              

              </tbody>

            </table>
        	</div>
        </div>
<?php Import::view('footer'); ?>