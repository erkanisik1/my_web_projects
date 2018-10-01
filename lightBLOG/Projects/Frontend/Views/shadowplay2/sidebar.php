<div class="sidebar">


  <h3><?php echo ML::select('search'); ?></h3>

<div id='search-box'>
  <form method="post" action="<?php echo baseUrl(); ?>arama" id="search_form">
    <input id='search-text' name='q' placeholder='Aranacak kelimeyi yazın' type='text'/>
    <button id='search-button' type='submit'><span>Ara</span></button>
  </form>
</div>

<h3>Kategoriler</h3>
<?php if (category('0')): ?>
  <ul>
    <?php foreach (category('0') as $key ): ?>
      <li><a href="<?php echo  baseUrl('category/'.$key->name_seo.'.html'); ?>"><?php echo $key->name ?></a></li>
    <?php endforeach ?>
    
  </ul>
<?php endif ?>
 
 

  
</div>