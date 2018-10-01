<?php Import::view('header') ?>



<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5><?php echo ml::select('edit'); ?></h5>
  </div>

  <div class="widget-content ">
    <form action="" method="post" class="form-horizontal">

      

       <div class="control-group">
        <label class="control-label"><?php echo ml::select('title'); ?> :</label>
        <div class="controls">
          <input type="text" class="span11" name="title" value="<?php echo $edit->title; ?> " readonly >
        </div> 
      </div>

     
      <div class="control-group">
        <label class="control-label"><?php echo ml::select('value'); ?> :</label>
        <div class="controls">

          <?php if ($edit->id == 6) { ?>
            <select name="value1" id="" class="span11">
              <option value="">secin...</option>
              <?php foreach (theme_list() as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
              <?php endforeach ?>
            </select>
          <?php  }else{?>
            <input type="text" class="span11" name="value" value="<?php echo $edit->value; ?>"  >
            <?php } ?>
        </div> 
      </div>
      <input type="hidden" name="id" value="<?php echo $edit->id; ?>">
      <div class="form-actions">
        <button type="submit" class="btn btn-success pull-right"><?php echo ml::select('update'); ?></button>
      </div>
    </form>
  </div>
</div>


<?php Import::view('footer') ?>