<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BitTrans | Transactions</title>

  <?php $this->load->view('common/css'); ?>
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
                <?php if($_SESSION['usertype'] == 'Admin'){ ?>
                    <h1 class="m-0">All Transactions</h1>
                <?php }else{ ?>
                    <h1 class="m-0">My Wallet</h1>
                <?php } ?>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bit Trans</a></li>
                <?php if($_SESSION['usertype'] == 'Admin'){ ?>
                    <li class="breadcrumb-item active">Transactions</li>
                <?php }else{ ?>
                    <li class="breadcrumb-item active">My Wallet</li>
                <?php } ?>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body row">
                    <?php if($_SESSION['usertype'] == 'Admin'){ ?>
                        <div class="col-md-12 table-responsive">
                          <table class="table table-bordered table-striped" id="transactions">
                            <thead>
                              <tr>
                                <td>User Info</td>
                                <td>Descrition</td>
                                <td>Coin Amount</td>
                                <td>Type</td>
                                <td>Status</td>
                                <td>Action</td>
                              </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                          </table>
                        </div>
                    <?php }else{ ?>
                        <div class="col-md-4">
                            <div class="card card-widget widget-user">
                              <!-- Add the bg color to the header using any of the bg-* classes -->
                              <div class="widget-user-header bg-info">
                                <h3 class="widget-user-username"><?=$_SESSION['name']; ?></h3>
                                <h5 class="widget-user-desc"><?=$_SESSION['email']; ?></h5>
                              </div>
                              <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="<?=base_url('assets/') ?>dist/img/avatar5.png" alt="User Avatar">
                              </div>
                              <div class="card-footer">
                                <div class="row">
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header"><?=balance() ?></h5>
                                      <span class="description-text">Balance<br><a href="javascript:void(0)" data-toggle="modal" data-target="#depostiModal"><i class="fa fa-coins"></i> Donation</a></span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header"><?=totalbids() ?></h5>
                                      <span class="description-text">Total Received</span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4">
                                    <div class="description-block">
                                      <h5 class="description-header"><?=totalwins() ?></h5>
                                      <span class="description-text">Total Donation</span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
                              </div>
                            </div>
                        </div>
                        <div class="col-md-8 table-responsive">
                            <h4>Transaction</h4>
                              <table class="table table-bordered table-striped" id="transactions">
                                <thead>
                                  <tr>
                                    <td>Descrition</td>
                                    <td>Coin Amount</td>
                                    <td>Type</td>
                                    <td>Status</td>
                                    <td></td>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                              </table>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- /.content -->
      
    </div>
    <!-- /.content-wrapper -->
    <?php $txn = "Txn".$_SESSION['id'].date('YmdHis'); ?>
    <div class="modal fade" id="depostiModal">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Deposit Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="<?=site_url('transactions/deposit'); ?>" method="POST" id="depositform">
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  $txn; ?>" />
                    <input type="hidden" id="member_id" name="member_id"  value="<?=$_SESSION['id']; ?>" />
                    
                    <div class="form-group col-md-12">
                        <label>Coin Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" value="" autofocus step="any" />
                        <code>* minimum deposit amount is 0.001</code>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="depositbtn" class="btn btn-primary">Proceed</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    
    <?php $this->load->view('common/footer'); ?>    
  </div>
  <form action="<?=site_url('transactions/deposit'); ?>" method="POST" id="syncdepositform">
  
    <input type="hidden" id="last_deposit_id" name="last_deposit_id"  value="<?=$_SESSION['last_deposit_id']?>"  />
    <input type="hidden" id="deposit_id" name="deposit_id"   />
    <input type="hidden" id="deposit_member_id" name="deposit_member_id"  />
    <input type="hidden" id="deposit_amount" name="deposit_amount"  />
  </form>
<?php $this->load->view('common/js'); ?>
<script src="<?=base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="<?=base_url('assets/dist/img/AdminLTELogo.png') ?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#transactions').DataTable({
          "ajax": {
              url : "<?=site_url('transactions/jsonData'); ?>",
              type : 'GET'
          },
      });
  });

  function changestatus(transactionid,status){
    Swal.fire({
      title: 'Do you want to perform the action?',
      showDenyButton: true,
      icon: "warning",
      confirmButtonText: `Yes, I am sure!`,
      denyButtonText: `No, leave it!`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url : '<?=site_url("transactions/changestatus"); ?>',
          type : 'POST',
          data : {id : transactionid, status : status},
          dataType : 'JSON',
          success : function(arg){
            if(arg.type == 'success'){
              Swal.fire("Success", arg.text, "success");
              $('#transactions').DataTable().ajax.reload();
            }else{
              Swal.fire("Warning", arg.text, "warning");
            }
          }
        })
      } else if (result.isDenied) {
        Swal.fire("Cancelled", "Your info is safe :)", "error");
      }
    });
  }

$('#depositform').submit(function(e){
	e.preventDefault();
    donate();
  /*
	$('#depositbtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
	$('#depositbtn').attr('disabled', 'disabled');
	$.ajax({
	  url: $('#depositform').attr('action'),
	  type: $('#depositform').attr('method'),
	  data: new FormData($('#depositform')[0]),
	  dataType: 'JSON',
	  processData: false,
	  contentType: false,
	  success: function(data){
	    $('#depositbtn').html('Save Changes');
	    $('#depositbtn').removeAttr('disabled');
	    if(data.type == 'success'){
	       $('#depositform')[0].reset();
	      Swal.fire("Warning", "Do not refresh. We are proceeding your payment.", "warning");
	      setTimeout(function(){ location.reload(); }, 3000);
	    }else{
	      Swal.fire("Warning", data.text, "warning");
	    }
	  }
	});
  */
})

</script>
</body>
</html>
