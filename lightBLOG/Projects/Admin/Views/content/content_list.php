<?php IMPORT::view('header'); ?>

<div id="content-header"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>İçerikler</h5>
	          <div class="pull-right" style="margin:5px;">
             <a href="<?php echo baseUrl(); ?>admin/content/content_new"><button><?php echo ml::select('newcontent'); ?></button> </a>
            </div>
	        </div>
        	<div class="widget-content nopadding">

          <table class="display" id="dataTable" class="data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>İcerik Adı</th>
                  <th>Kategorisi</th>
                  <th>hit</th>
                 
                  <th>onay</th>
                  <th>anasayfa</th>
                  <th width="80">İşlemler</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($content as $key ) { ?>

                <tr>
                  <td><?php echo $key->title ?></td>
                  <td><?php echo category_name($key->category); ?></td>
                  <td><?php echo $key->hit; ?></td>
                  
                  <td><?php echo $key->status; ?></td>
                  <td><?php echo $key->homepage; ?></td>
                  <td class="islemler" style="text-align: center;">
                    <a href="<?php echo baseUrl(); ?>admin/content/content_edit/<?php echo $key->id; ?>"><i class="icon-pencil"></i></a>
                    <a href="<?php echo baseUrl(); ?>admin/content/content_delete/<?php echo $key->id; ?>" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');"><i class="icon-remove"></i></a>
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