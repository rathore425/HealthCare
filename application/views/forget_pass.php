<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Forget Password</title>

  <?php $this->load->view('common/css'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=site_url() ?>"><b>Matka</b>Play</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily create a new password.</p>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="reg_email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button class="btn btn-block btn-primary" id="verifybtn" type="button" onclick="send_femail(this)"><i class="fa fa-envelop mr-2"></i> Verify Now</button>
        </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?=site_url(); ?>">Allready have your password ?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<div class="modal fade" id="verifyModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Verify Your Email</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
        <div class="modal-body">
            <label>Verification Code</label>
            <input type="hidden" id="main_code" value="" \>
            <input type="text" id="user_code" class="form-control" \>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="verify_email(this)">Verify</button>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="passModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="reg_password" name="password" placeholder="New Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="reg_cnf_pass" name="cnfpass" placeholder="Confirm Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="updatePass(this)">Update</button>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php $this->load->view('common/js'); ?>

<script type="text/javascript">

  function send_femail(ele){
      $(ele).html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $(ele).attr('disabled', 'disabled');
      $.ajax({
          url : '<?=site_url("login/send_femail"); ?>',
          type : 'POST',
          data : {email : $('#reg_email').val()},
          dataType : 'JSON',
          success : function(arg){
              Swal.fire("Warning", arg.text, "warning");
              $(ele).html('<i class="fa fa-user mr-2"></i> Verify Now');
              $(ele).removeAttr('disabled');
              if(arg.type == 'success'){
                  $('#verifyModal').modal('show');
                  $('#main_code').val(arg.main_code);
              }
          }
      })
  }
  
  function verify_email(ele){
      $(ele).html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $(ele).attr('disabled', 'disabled');
      $.ajax({
          url : '<?=site_url("login/verify_email"); ?>',
          type : 'POST',
          data : {user_code : $('#user_code').val(), main_code : $('#main_code').val()},
          dataType : 'JSON',
          success : function(arg){
              if(arg.type == 'success'){
                  $('#verifyModal').modal('hide');
                  $('#passModal').modal('show');
              }else{
                Swal.fire("Warning", arg.text, "warning");
                $(ele).html('Verify');
                $(ele).removeAttr('disabled');
              }
          }
      })
  }

  function updatePass(ele){
      $(ele).html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $(ele).attr('disabled', 'disabled');
      $.ajax({
          url : '<?=site_url("login/updatepass"); ?>',
          type : 'POST',
          data : {email : $('#reg_email').val(),password : $('#reg_password').val(),cnf_pass : $('#reg_cnf_pass').val()},
          dataType : 'JSON',
          success : function(arg){
              $(ele).html('Update');
              $(ele).removeAttr('disabled');
              if(arg.type == 'success'){
                  Swal.fire("Success", arg.text, "success");
                  $('#passModal').modal('hide');
                  location.href = "<?=site_url(); ?>";
              }else{
                  Swal.fire("Warning", arg.text, "warning");
              }
          }
      })
  }
</script>

</body>
</html>
