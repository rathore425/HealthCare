<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?=site_url('dashboard'); ?>" class="brand-link">
    <span class="brand-text font-weight-light">   Symbiotix
</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <?php
          if(current_url() == site_url('dashboard')){
            ?>
            <a href="<?=site_url('dashboard'); ?>" class="nav-link active">
            <?php
          }else{
            ?>
            <a href="<?=site_url('dashboard'); ?>" class="nav-link">
            <?php
          }
          ?>
            <i class="nav-icon fa fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php
        if($_SESSION['usertype'] == 'Admin'){
        ?>
          <li class="nav-item">
            <?php
            if(current_url() == site_url('users')){
              ?>
              <a href="<?=site_url('users'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('users'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
           <li class="nav-item">
            <?php
            if(current_url() == site_url('Diagnostictests')){
              ?>
              <a href="<?=site_url('diagnostictests'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('diagnostictests'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-users"></i>
              <p>
Diagnostictests              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php
            if(current_url() == site_url('Diagnostictests')){
              ?>
              <a href="<?=site_url('dortor'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('dortor'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-users"></i>
              <p>
Dortor              </p>
            </a>
          </li>
           <li class="nav-item">
            <?php
            if(current_url() == site_url('healthcareworkers')){
              ?>
              <a href="<?=site_url('healthcareworkers'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('healthcareworkers'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-users"></i>
              <p>
Healthcareworkers              </p>
            </a>
          </li>
           <li class="nav-item">
            <?php
            if(current_url() == site_url('patients')){
              ?>
              <a href="<?=site_url('patients'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('patients'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-users"></i>
              <p>
Patients              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php
            if(current_url() == site_url('transactions')){
              ?>
              <a href="<?=site_url('transactions'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('transactions'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-university"></i>
              <p>
                Transactions
              </p>
            </a>
          </li>
        <?php
        }else{
          ?>
          <li class="nav-item">
            <?php
            if(current_url() == site_url('transactions')){
              ?>
              <a href="<?=site_url('transactions'); ?>" class="nav-link active">
              <?php
            }else{
              ?>
              <a href="<?=site_url('transactions'); ?>" class="nav-link">
              <?php
            }
            ?>
              <i class="nav-icon fa fa-university"></i>
              <p>
                My Wallet
              </p>

            </a>
          </li>

          <?php
        }
        ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>