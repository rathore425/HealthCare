<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Biding</title>

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
              <h1 class="m-0">Biding</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Matka Play</a></li>
                <li class="breadcrumb-item active">Biding</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
          <div class="row card-body">
          <?php
            foreach($matkas as $key => $value){
                ?>
                <div class="col-md-3">
                	<div class="info-box">
                	  <span class="info-box-icon bg-warning"><i class="fa fa-coins"></i></span>
                	  <div class="info-box-content">
                	    <span class="info-box-text"><?=$value['matka']; ?></span>
                	    <span class="info-box-number"><?='Opening : '.$value['opening_time'].'<br>Closing : '.$value['closing_time']; ?></span>
                
                	    <div class="progress">
                	      <div class="progress-bar" style="width: 70%; background-color: #f8c146;"></div>
                	    </div>
                	    <span class="progress-description text-right">
                        <button class="btn btn-xs btn-dark" type="button" onclick="playnow(<?=$value['id']; ?>)">Play Now</button>
                	    </span>
                	  </div>
                	</div>
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

  <div class="modal fade" id="playnow">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="max-height: 600px; overflow: auto;">
        <div class="modal-header">
          <h4 class="modal-title" id="matka_head">Matka</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?=site_url('matkas/addematka'); ?>" method="POST" id="addform">
          <div class="modal-body">
            <div class="row">
              <input type="hidden" value="" id="matka_id_hidden" />
              <?php
              foreach($rates as $key => $value){
                ?>
                <div class="col-md-4">
                  <div class="info-box" style="border-bottom: 1px solid #003e80;">
                    <div class="info-box-content">
                      <a href="javascript:void(0)" onclick="bid('<?=$value['play_type']; ?>')">
                        <span class="info-box-text"><img src="<?=base_url('assets/images/').strtolower(str_replace(' ','',$value['play_type'])).'.png'; ?>" style="width: 30px; margin-right: 5px; vertical-align: middle;" /><?=$value['play_type']; ?></span>
                      </a>
                    </div>
                  </div>
                </div>  
                <?php
              }
              ?>
            </div>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="bidnow">
    <div class="modal-dialog modal-md">
      <div class="modal-content" style="max-height: 600px; overflow: auto;">
        <div class="modal-header">
          <h4 class="modal-title" id="bid_head">Matka</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?=site_url('biding/bidnow') ?>" id="bidform" method="post">
            <div class="modal-body">
          <div class="row">
            <input type="hidden" name="matkaid" id="mid"/>
            <div class="col-md-6 form-group">
                <label>Date</label>
                <select class="form-control" id="created_at" name="created_at"></select>
            </div>
            
            <div class="col-md-6 form-group" id="choose_bid_type">
            </div>

            <div class="col-md-6">
                <label>Lucky Number</label>
                <select class="form-control" id="numbers" name="bidnumber"></select>
            </div>
            
            <div class="col-md-6">
                <label>Bid Points</label>
                <input type="number" name="points" class="form-control"/>
            </div>
            
            <div class="col-md-12 text-right mt-2">
                <button type="submit" class="btn btn-success" id="bidbtn"><i class="fa fa-coins"></i> Proceed</button>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12"><hr></div>
              <div class="col-md-12" id="prebids"></div>
          </div>
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

<script>
  function playnow(matkaid){
    $.ajax({
      url : '<?=site_url('biding/matkainfo'); ?>',
      type : 'POST',
      data : {id : matkaid},
      dataType : 'JSON',
      success : function(arg){
        $('#matka_id_hidden').val(matkaid);
        $('#matka_head').html(arg.matka);
        $('#playnow').modal('show');
      }
    })
  }

  function bid(playtype){
    $.ajax({
      url : '<?=site_url('biding/bid'); ?>',
      type : 'POST',
      data : {playtype : playtype, matkaid : $('#matka_id_hidden').val()},
      dataType : 'JSON',
      success : function(arg){
        $('#mid').val($('#matka_id_hidden').val());
        $('#bid_head').html(arg.matka);
        $('#choose_bid_type').html(arg.choose_bid_type);
        $('#created_at').html(arg.dates);
        $('#numbers').html(arg.numbers);
        $('#playnow').modal('hide');
        $('#bidnow').modal('show');
        $('#prebids').html('');
      }
    })
  }
  
  $('#created_at').on('change', function(){
      $('#bidingtable').DataTable().destroy();
      $('#prebids').html('<i class="fa fa-spinner fa-spin"></i> Please wait....');
      $.ajax({
          url : '<?=site_url("biding/prebids") ?>',
          type : 'POST',
          data : {matkaid : $('#matka_id_hidden').val(), created_at : $('#created_at option:selected').val()},
          dataType : 'JSON',
          success : function(arg){
              $('#prebids').html(arg.html);
              $('#bidingtable').DataTable();
          }
      })
  })
  
  $('#bidform').submit(function(e){
    let userid = $('#buserid').val();
    e.preventDefault();
    $('#bidbtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
    $('#bidbtn').attr('disabled', 'disabled');
    $.ajax({
      url: $('#bidform').attr('action'),
      type: $('#bidform').attr('method'),
      data: new FormData($('#bidform')[0]),
      dataType: 'JSON',
      processData: false,
      contentType: false,
      success: function(data){
        $('#bidbtn').html('<i class="fa fa-coins"></i> Proceed');
        $('#bidbtn').removeAttr('disabled');
        if(data.type == 'success'){
        //   $('#bidform')[0].reset();
          Swal.fire("Success", "Bid Added Successfully", "success");
          $('#created_at').change();
        }else{
          Swal.fire("Warning", data.text, "warning");
        }
      }
    });
  })
</script>

</body>
</html>
