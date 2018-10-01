<?php Import::view('header'); ?>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5><?php echo ml::select('newcontent'); ?></h5>
  </div>

  <div class="widget-content ">
    <form action="" method="post" class="form-horizontal">

      <div class="control-group">
        <label class="control-label"><?php echo ml::select('contentcategory'); ?> :</label>
        <div class="controls">
          <select name="kategori" id="" class="span11">
            <option value="">Yazının kategorinisi seçiniz...</option>
            <?php foreach (category_list() as $key): ?>
              <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>

       <div class="control-group">
        <label class="control-label"><?php echo ml::select('title'); ?> :</label>
        <div class="controls">
          <input type="text" class="span11" name="title" placeholder="BAŞLIK">
        </div> 
      </div>

      <div class="control-group">
        <label class="control-label"><?php echo ml::select('content'); ?> :</label>
        <div class="controls">
           <textarea class="span11" id="editor" name="content" rows="30"></textarea>
        </div> 
      </div>

      <div class="control-group">
        <label class="control-label"><?php echo ml::select('label'); ?> :</label>
        <div class="controls">
            <input type="text" class="span11" name="keywords" value="" placeholder="Etiketleri aralarına virgül koyarak yazın.">
        </div> 
      </div>

       <div class="control-group">
        <label class="control-label"><?php echo ml::select('description'); ?> :</label>
        <div class="controls">
             <input type="text" class="span11" name="description" value="" placeholder="Yazı hakkında kısa bir açıklama yazın">
        </div> 
      </div>

      <div class="control-group">
        <label class="control-label"><?php echo ml::select('homepageshow'); ?> :</label>
        <div class="controls">
              <select name="homepage" id="" class="span11">
        <option value="1"><?php echo ml::select('yes'); ?></option>
        <option value="0"><?php echo ml::select('no'); ?></option>
      </select>
        </div> 
      </div>  

    

    

      <div class="form-actions">
        <button type="submit" class="btn btn-success pull-right"><?php echo ml::select('save'); ?></button>
      </div>
    </form>
  </div>
</div>
<?php Import::view('footer') ?>