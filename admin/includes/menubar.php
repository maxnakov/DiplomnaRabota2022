<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['asd'].' '.$admin['asd']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Оналйн</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Доклад</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Контролен панел</span></a></li>
      <li><a href="sales.php"><i class="fa fa-money"></i> <span>Продажби</span></a></li>
      <li class="header">Управявай</li>
      <li><a href="users.php"><i class="fa fa-users"></i> <span>Потребители</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Продукти</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"><i class="fa fa-circle-o"></i> Продукти</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Категории</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>