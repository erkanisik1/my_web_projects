<?php import::view(THEME.'header');?>



          <h1 class="my-4"><small></small></h1>

        <?php foreach (contentlist() as $key): ?>
  <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo Afunc::resimgoster($key->content); ?>" alt="Card image cap" height="300">
            <div class="card-body">
              <h2 class="card-title"><?php echo $key->title ?></h2>
              <p class="card-text"><?php echo Afunc::kelimedenbol($key->content,'150'); ?></p>
              <a href="#" class="btn btn-primary"><?php echo ml::select('read'); ?> &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Ekleyen: <?php echo aFunc::tcevir($key->create_date); ?> by
              <a href="#"><?php echo author($key->author)->name; ?></a>
            </div>
          </div>

<?php endforeach ?>
          
        

        

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; <?php echo ML::select('older'); ?></a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#"><?php echo ML::select('newer'); ?> &rarr;</a>
            </li>
          </ul>

 

<?php import::view(THEME.'footer'); ?>
