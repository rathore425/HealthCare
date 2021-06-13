<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Matkas</title>

  <?php $this->load->view('common/css'); ?>
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- time picker -->
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
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
              <h1 class="m-0">Matka Master</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Matka Play</a></li>
                <li class="breadcrumb-item active">Matkas</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row card card-body">
            <div class="col-md-12 text-right mb-2">
              <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#addModal">Add New Matka</button>
            </div>
            <div class="col-md-12 table-responsive">
              <table class="table table-bordered table-striped" id="matkas">
                <thead>
                  <tr>
                    <td>Matka</td>
                    <td>Opening Time</td>
                    <td>Closing Time</td>
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

    <?php $this->load->view('common/footer'); ?>    
  </div>

    <div class="modal fade" id="addModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">New Matka Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="<?=site_url('matkas/addmatka'); ?>" id="addform" method="POST">
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Matka Name</label>
                  <input type="text" class="form-control" name="matka" />
                </div>
                <div class="form-group col-md-6">
                  <label>Opening Time</label>
                  <div class="input-group date" id="ptimepicker" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#ptimepicker" name="opening_time"/>
                    <div class="input-group-append" data-target="#ptimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Closing Time</label>
                  <div class="input-group date" id="ctimepicker" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#ctimepicker" name="closing_time"/>
                    <div class="input-group-append" data-target="#ctimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="addbtn" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="editModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Matka Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="<?=site_url('matkas/updatematka'); ?>" id="editform" method="POST">
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Matka Name</label>
                  <input type="hidden" class="form-control" name="id" />
                  <input type="text" class="form-control" name="matka" />
                </div>
                <div class="form-group col-md-6">
                  <label>Opening Time</label>
                  <div class="input-group date" id="eptimepicker" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#eptimepicker" name="opening_time"/>
                    <div class="input-group-append" data-target="#eptimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Closing Time</label>
                  <div class="input-group date" id="ectimepicker" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#ectimepicker" name="closing_time"/>
                    <div class="input-group-append" data-target="#ectimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="updatebtn" class="btn btn-primary">Update changes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

<?php $this->load->view('common/js'); ?>
<script src="<?=base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- time picker -->
<script src="<?=base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#matkas').DataTable({
          "ajax": {
              url : "<?=site_url('matkas/jsonData'); ?>",
              type : 'GET'
          },
      });
  });

  //Timepicker
  $('#ctimepicker,#ptimepicker,#ectimepicker,#eptimepicker').datetimepicker({
    format: 'H:m',
  })

  function changestatus(matkaid,status){
    Swal.fire({
      title: 'Do you want to perform the action?',
      showDenyButton: true,
      icon: "warning",
      confirmButtonText: `Yes, I am sure!`,
      denyButtonText: `No, leave it!`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url : '<?=site_url("matkas/changestatus"); ?>',
          type : 'POST',
          data : {id : matkaid, status : status},
          dataType : 'JSON',
          success : function(arg){
            if(arg.type == 'success'){
              Swal.fire("Success", arg.text, "success");
              $('#matkas').DataTable().ajax.reload();
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

  $('#addform').submit(function(e){
    e.preventDefault();
    $('#addbtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
    $('#addbtn').attr('disabled', 'disabled');
    $.ajax({
      url: $('#addform').attr('action'),
      type: $('#addform').attr('method'),
      data: new FormData($('#addform')[0]),
      dataType: 'JSON',
      processData: false,
      contentType: false,
      success: function(data){
        $('#addbtn').html('Save Changes');
        $('#addbtn').removeAttr('disabled');
        if(data.type == 'success'){
          $('#addform')[0].reset();
          Swal.fire("Success", "Matka Added Successfully", "success");
          $('#matkas').DataTable().ajax.reload();
          $('#addModal').modal('hide');
        }else{
          Swal.fire("Warning", data.text, "warning");
        }
      }
    });
  })

  $('#editform').submit(function(e){
    e.preventDefault();
    $('#updatebtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
    $('#updatebtn').attr('disabled', 'disabled');
    $.ajax({
      url: $('#editform').attr('action'),
      type: $('#editform').attr('method'),
      data: new FormData($('#editform')[0]),
      dataType: 'JSON',
      processData: false,
      contentType: false,
      success: function(data){
        $('#updatebtn').html('Update Changes');
        $('#updatebtn').removeAttr('disabled');
        if(data.type == 'success'){
          $('#editform')[0].reset();
          Swal.fire("Success", "Matka Updated Successfully", "success");
          $('#matkas').DataTable().ajax.reload();
          $('#editModal').modal('hide');
        }else{
          Swal.fire("Warning", data.text, "warning");
        }
      }
    });
  })

  function edit(matkaid){
    $.ajax({
      url : '<?=site_url("matkas/editmatka"); ?>',
      type : 'POST',
      data : {id : matkaid},
      dataType : 'JSON',
      success : function(arg){
        $.each( arg, function( index, val ) {
            $("#editform input[name="+index+"]").val(val);
        });
        $('#editModal').modal('show');
      }
    })
  }
</script>
</body>
</html>
