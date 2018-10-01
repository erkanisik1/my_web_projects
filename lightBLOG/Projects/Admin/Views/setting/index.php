<?php IMPORT::view('header'); ?>

<div id="content-header"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Settings</h5>
	          <div class="pull-right" style="margin:5px;">
             <a href="<?php echo baseUrl(); ?>admin/setting/new"><button>New Settings</button> </a>
            </div>
	        </div>
        	<div class="widget-content nopadding">

          <table class="display" id="dataTable" class="data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th><?php echo ml::select('key'); ?></th>
                  <th><?php echo ml::select('value'); ?></th>
                  <th width="110"><?php echo ml::select('operations'); ?></th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($setting as $key ) { ?>

                <tr>
                  <td><?php echo $key->title ?></td>
                  <td><?php echo $key->value; ?></td>
                 
                  <td class="islemler" style="text-align: center;">
                    <a href="<?php echo baseUrl(); ?>admin/setting/edit/<?php echo $key->id; ?>"><button class="btn btn-success"><?php echo ml::select('edit') ?></button></a>
                    <a href="<?php echo baseUrl(); ?>admin/setting/delete/<?php echo $key->id; ?>" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');"><button class="btn btn-danger"><?php echo ml::select('delete') ?></button></a>
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