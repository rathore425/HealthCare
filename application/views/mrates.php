<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Market Rates</title>

  <?php $this->load->view('common/css'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?=base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <?php $this->load->view('common/header'); ?>
    <?php $this->load->view('common/sidenav'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Market Rates</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Matka Play</a></li>
                <li class="breadcrumb-item active">Market Rates</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
          <div class="row card-body">
          <?php
            foreach($rates as $key => $value){
                ?>
                <div class="col-md-3">
                    <div class="info-box shadow-none">
                      <span class="info-box-icon bg-success"><i class="fa fa-coins"></i></span>
                    
                      <div class="info-box-content">
                        <span class="info-box-text"><?=$value['play_type']; ?></span>
                        <span class="info-box-number">10 KA <?=$value['rate']*10; ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <?php
            }
          ?>
          </div>
      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('common/footer'); ?>    
  </div>

<?php $this->load->view('common/js'); ?>
</body>
</html>