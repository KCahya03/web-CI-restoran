<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Daftar Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('kasir/menu_makanan')?>">Menu Makanan</a>
          <a class="dropdown-item" href="<?php echo base_url('kasir/menu_minuman')?>">Menu Minuman</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kasir/order/add') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Input Orderan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kasir/order')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Histori Transaksi</span></a>
      </li>
    </ul>
