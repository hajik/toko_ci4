<?php
  $session = session();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HSR STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      
      <?php if($session->get('isLoggedIn')): ?>

      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('home/index') ?>">Home</a>
        </li>

        <?php if(session()->get('role')==0): ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item"  href="<?= site_url('barang/index') ?>" >List Product</a></li>
            <li><a class="dropdown-item"  href="<?= site_url('barang/create') ?>" >Add Product</a></li>
          </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('transaksi/index')?>">Transaksi</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/index')?>">User</a>
        </li>

        <?php else: ?>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('etalase/index')?>">Etalase</a>
          </li>
        
          <?php endif ?>

      </ul>

      <?php endif; ?>

      <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
        <?php if($session->get('isLoggedIn')): ?>
  
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
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