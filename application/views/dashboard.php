<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BitTrans | Dashboard</title>

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
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bit Trans</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
          <div class="row">
            <div class="col-md-6">
                <div class="info-box shadow-none">
                  <span class="info-box-icon bg-success"><i class="fa fa-coins"></i></span>
                
                  <div class="info-box-content">
                    <span class="info-box-text">BTC Address</span>
                    <span class="info-box-number"><a href="<?= 'https://www.blockchain.com/btc/address/'.$_SESSION['btc_address'].'?page=2' ?>" target="_blank"><?=$_SESSION['btc_address'] ?></a></span>
                  </div>
                  <!-- /.info-box-content -->
                 
                </div>

                <!-- /.info-box -->
            </div>
            <html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light1", // "light2", "dark1", "dark2"
  animationEnabled: false, // change to true    
  title:{
    text: "Donation   Chart"
  },
  data: [
  {
    // Change type to "bar", "area", "spline", "pie",etc.
    type: "column",
    dataPoints: [
      { label: "doctors ",  y: 10000  },
      { label: "Healthcare workers", y: 15000  },
      { label: "Patients ", y: 250000  },
      { label: "Diagnostic Tests",  y: 300000 },
    ]
  }
  ]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>
          </div>
      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('common/footer'); ?>    
  </div>

<?php $this->load->view('common/js'); ?>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

</html>
