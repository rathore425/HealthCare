<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BitTrans | Users</title>

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
              <h1 class="m-0">User Master</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bit Trans</a></li>
                <li class="breadcrumb-item active">Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row card card-body">
            <div class="col-md-12 table-responsive">
              <table class="table table-bordered table-striped" id="users">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile</td>
                    <td>Status</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    <!-- Modal -->
    <div id="balanceModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <form action="<?=site_url('users/addbalance') ?>" id="balanceform" method="post">
            <!-- Modal content-->
            <div class="modal-content modal-md" style="max-height: 600px; overflow: auto;">
              <div class="modal-header">
                <h4 class="modal-title">Balance Info</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="mb-2" id="user_info_span"></div>
                        <span class="text-success">Wallet balance : </span><span id="balance_span"></span>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="hidden" name="userid" id="buserid" />
                        <label>Add More Balance</label>
                        <input type="number" steps="1" name="balance" value="0" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group" style="margin-top: 1.9rem;">
                        <button type="submit" id="balancebtn" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</button>
                    </div>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
    
    <!-- Modal -->
    <div id="bidModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Bidding Info</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" id="bidding_div">
            
          </div>
        </div>
      </div>
    </div>
    
    <?php $this->load->view('common/footer'); ?>    
  </div>

<?php $this->load->view('common/js'); ?>
<script src="<?=base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#users').DataTable({
          "ajax": {
              url : "<?=site_url('users/jsonData'); ?>",
              type : 'GET'
          },
      });
  });

  function changestatus(userid,status){
    Swal.fire({
      title: 'Do you want to perform the action?',
      showDenyButton: true,
      icon: "warning",
      confirmButtonText: `Yes, I am sure!`,
      denyButtonText: `No, leave it!`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url : '<?=site_url("users/changestatus"); ?>',
          type : 'POST',
          data : {id : userid, status : status},
          dataType : 'JSON',
          success : function(arg){
            if(arg.type == 'success'){
              Swal.fire("Success", arg.text, "success");
              $('#users').DataTable().ajax.reload();
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
  
  function balance_info(userid, ele){
      $('#user_info_span').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $('#balance_span').html('');
      $.ajax({
          url : '<?=site_url("users/balance_info") ?>',
          type : 'POST',
          data : {userid : userid},
          dataType : 'JSON',
          success : function (arg){
              if(arg.type == 'success'){
                $('#buserid').val(userid);
                $('#user_info_span').html(arg.user_info);
                $('#balance_span').html(arg.balance);   
              }
          }
      })
  }
  
  function bid_info(userid, ele){
      $('#bidingtable').DataTable().destroy();
      $('#bidding_div').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $.ajax({
          url : '<?=site_url("users/bid_info") ?>',
          type : 'POST',
          data : {userid : userid},
          dataType : 'JSON',
          success : function (arg){
              $('#bidding_div').html(arg.html);
              $('#bidingtable').DataTable();
          }
      })
  }
  
  $('#balanceform').submit(function(e){
    let userid = $('#buserid').val();
    e.preventDefault();
    $('#balancebtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
    $('#balancebtn').attr('disabled', 'disabled');
    $.ajax({
      url: $('#balanceform').attr('action'),
      type: $('#balanceform').attr('method'),
      data: new FormData($('#balanceform')[0]),
      dataType: 'JSON',
      processData: false,
      contentType: false,
      success: function(data){
        $('#balancebtn').html('<i class="fa fa-paper-plane"></i> ');
        $('#balancebtn').removeAttr('disabled');
        if(data.type == 'success'){
          $('#balanceform')[0].reset();
          $('#balanceModal').modal('hide');
          Swal.fire("Success", "Balance Added Successfully", "success");
          balance_info(userid, $('#balance_info_btn'));
        }else{
          Swal.fire("Warning", data.text, "warning");
        }
      }
    });
  })
</script>
</body>
</html>
