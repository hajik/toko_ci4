<?php
  $session = session();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <i class="bi bi-cart"></i>
      HSR STORE
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      
      <?php if($session->get('isLoggedIn')): ?>

      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('home/index') ?>">
            <i class="bi bi-house-fill"></i>
            Home
          </a>
        </li>

        <?php if(session()->get('role')==0): ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('barang/index')?>">
            <i class="bi bi-box-seam"></i>
              Daftar Produk
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('transaksi/index')?>">
              <i class="bi bi-card-checklist"></i>
              Transaksi
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/index')?>">
              <i class="bi bi-person-fill"></i>
              User
            </a>
        </li>

        <?php else: ?>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('etalase/index')?>">
            <i class="bi bi-bag-fill"></i>
              Daftar Produk
            </a>
          </li>
        
          <?php endif ?>

      </ul>

      <?php endif; ?>

      <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
        <?php if($session->get('isLoggedIn')): ?>
  
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('auth/logout') ?>">
              <i class="bi bi-box-arrow-right"></i>
              Logout
            </a>
        </li>
  
        <?php else : ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('auth/login') ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('auth/register') ?>">Register</a>
        </li>

        <?php endif; ?>

      </ul>
      </div>
    </div>
  </div>
</nav>