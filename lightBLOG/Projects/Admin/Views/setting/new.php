<?php Import::view('header'); ?>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5><?php echo ml::select('newcontent'); ?></h5>
  </div>

  <div class="widget-content ">
    <form action="" method="post" class="form-horizontal">

      

       <div class="control-group">
        <label class="control-label"><?php echo ml::select('title'); ?> :</label>
        <div class="controls">
          <input type="text" class="span11" name="title" placeholder="BAŞLIK">
        </div> 
      </div>

     
      <div class="control-group">
        <label class="control-label"><?php echo ml::select('value'); ?> :</label>
        <div class="controls">
            <input type="text" class="span11" name="keywords" value="" placeholder="Etiketleri aralarına virgül koyarak yazın.">
        </div> 
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-success pull-right"><?php echo ml::select('save'); ?></button>
      </div>
    </form>
  </div>
</div>
<?php Import::view('footer') ?>