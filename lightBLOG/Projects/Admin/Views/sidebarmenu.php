<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> <?php echo ml::select('controlpanel') ?></a>
  <ul>
    <li class="active"><a href="/admin/"><i class="icon icon-home"></i> <span><?php echo ml::select('controlpanel') ?></span></a> </li>
    <li class="submenu"><a href="#"><i class="icon icon-signal"></i> <span><?php echo ml::select('pagemanagement') ?></span></a> 
      <ul>
        <li><a href="/admin/page"><?php echo ml::select('pagelist') ?></a></li>
        <li><a href="/admin/page/new"><?php echo ml::select('newpage') ?></a></li>
      </ul>
    </li>
    <li><a href="/admin/content"><i class="icon icon-book"></i><?php echo ml::select('contentmanagement') ?></a></li>
    <li><a href="/admin/category"><i class="icon icon-picture"></i><?php echo ml::select('categorymanagement') ?></a></li>
    <li><a href="/admin/user"><i class="icon icon-user"></i> <span><?php echo ml::select('usermanagement') ?></span></a></li>
    <li><a href="/admin/menu"><i class="icon icon-th"></i><?php echo ml::select('menumanagement') ?></a></li>
  </ul>
</div>
<!--sidebar-menu-->