<?php IMPORT::view('header'); ?>

 <div id="breadcrumb"> <a href="<?php echo baseUrl().'yonetim' ?> " class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> YÖNETİM PANELİ</a> <a href="<?php echo baseUrl().'yonetim/sayfa' ?>" class="tip-bottom" data-original-title="">SAYFA</a></div>



<div class="container-fluid">

	<div class="row-fluid">

		<div class="widget-box">

	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>

	          <h5>Sayfalar</h5>



	          <div class="pull-right" style="margin:5px;"><a href="<?php echo baseUrl(); ?>yonetim/page/new "><button>YENİ SAYFA</button> </a></div>

	        </div>

        	<div class="widget-content nopadding">

        	<table class="table table-bordered table-striped">

              <thead>

                <tr>

                  <th>Sayfa</th>

                  <th width="80">İşlemler</th>

                </tr>

              </thead>

              <tbody>

               <?php foreach ($sayfa as $key ) { ?>

                <tr>

                  <td><?php echo $key->title ?></td>

                  <td class="islemler" style="text-align: center;">

                    <a href="<?php echo baseUrl(); ?>yonetim/page/update/<?php echo $key->id; ?>"><i class="icon-pencil"></i></a>

                    <a href="<?php echo baseUrl(); ?>/yonetim/page/delete/<?php echo $key->id; ?>"><i class="icon-remove"></i></a>

                  </td>

                </tr>

               <?php } ?>

              



              </tbody>



            </table>

        	</div>

        </div>

    </div>

</div>







<?php Import::view('footer'); ?>