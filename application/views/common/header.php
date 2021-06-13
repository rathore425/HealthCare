<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?=site_url('dashboard'); ?>" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    
    
        <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-user"></i>
        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <a href="<?=site_url('login/logout'); ?>" class="dropdown-item dropdown-footer">Log Out</a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar