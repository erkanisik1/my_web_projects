<?php IMPORT::view('header'); ?>


	<div class="row-fluid">

		<div class="widget-box">

	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>

	          <h5>DUYURULAR</h5>

	          <div class="pull-right" style="margin:5px;">

              <a href="<?php echo baseUrl(); ?>yonetim/duyuru/yeni"><button>YENİ DUYURU</button> </a>

            </div>

	        </div>

        	<div class="widget-content nopadding">

			

          <table class="display" id="dataTable" class="data-table" cellspacing="0" width="100%">

              <thead>

                <tr>

                  <th>Duyuru</th>

                  <th>durumu</th>

                  <th width="80">İşlemler</th>

                </tr>

              </thead>

              <tbody>

               <?php 

               //output($icerik);

               foreach ($liste as $key ) { ?>

                <tr>

                  <td><?php echo $key->duyuru ?></td>

                  <td><?php echo $key->durum == '1'? 'AKTİF':'PASİF'; ?></td>

                  <td class="islemler" style="text-align: center;">

                    <a href="<?php echo baseUrl(); ?>yonetim/duyuru/duzenle/<?php echo $key->id; ?>"><i class="icon-pencil"></i></a>

                    <a href="<?php echo baseUrl(); ?>yonetim/duyuru/sil/<?php echo $key->id; ?>" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');"><i class="icon-remove"></i></a>

                  </td>

                </tr>

               <?php } ?>

              



              </tbody>



            </table>

        	</div>

        </div>

    </div>




<?php Import::view('footer'); ?>