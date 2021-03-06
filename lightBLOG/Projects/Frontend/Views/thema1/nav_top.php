    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo siteUrl(); ?>"><?php echo settings('site_name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><?php echo ML::select('home'); ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo ML::select('about'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo ML::select('services'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo ML::select('contact'); ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
