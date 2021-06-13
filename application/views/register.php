<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Registration</title>

  <?php $this->load->view('common/css'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=site_url() ?>"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?=site_url('login/registration') ?>" id="loginform" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" id="reg_name" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="reg_email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="reg_mobile" maxlength="10" minlength="10" name="mobile" placeholder="Mobile No">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="reg_password" name="password" placeholder="Password">
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
        <div class="social-auth-links text-center mb-3">
          <button class="btn btn-block btn-primary" id="verifybtn" type="button" onclick="send_email(this)"><i class="fa fa-user mr-2"></i> Register Now</button>
          <button class="btn btn-block btn-primary" id="loginbtn" type="submit" style="display: none;"><i class="fa fa-user mr-2"></i> Sign In</button>
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?=site_url(); ?>">Allready have an account ?</a>
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
      <form action="<?=site_url('matkas/addmatka'); ?>">
        <div class="modal-body">
            <label>Verification Code</label>
            <input type="hidden" id="main_code" value="" \>
            <input type="text" id="user_code" class="form-control" \>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="verify_email(this)">Verify</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php $this->load->view('common/js'); ?>

<script type="text/javascript">

  function send_email(ele){
      $(ele).html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
      $(ele).attr('disabled', 'disabled');
      $.ajax({
          url : '<?=site_url("login/send_email"); ?>',
          type : 'POST',
          data : {email : $('#reg_email').val(),mobile : $('#reg_mobile').val(),name : $('#reg_name').val(),password : $('#reg_password').val(),cnf_pass : $('#reg_cnf_pass').val()},
          dataType : 'JSON',
          success : function(arg){
              Swal.fire("Warning", arg.text, "warning");
              $(ele).html('<i class="fa fa-user mr-2"></i> Register Now');
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
                  Swal.fire("Success", arg.text, "success");
                  $('#loginform').submit();
              }else{
                Swal.fire("Warning", arg.text, "warning");
                $(ele).html('Verify');
                $(ele).removeAttr('disabled');
              }
          }
      })
  }

  $('#loginform').submit(function(e){
    e.preventDefault();
    $('#loginbtn').html('<i class="fa fa-spinner fa-spin"></i> Please wait...');
    $('#loginbtn').attr('disabled', 'disabled');
    $.ajax({
      url: $('#loginform').attr('action'),
      type: $('#loginform').attr('method'),
      data: new FormData($('#loginform')[0]),
      dataType: 'JSON',
      processData: false,
      contentType: false,
      success: function(data){
        $('#loginbtn').html('<i class="fa fa-user mr-2"></i> Sign In');
        $('#loginbtn').removeAttr('disabled');
        if(data.type == 'success'){
          $('#loginform')[0].reset();
          Swal.fire("Success", "Registered Successfully", "success");
          location.href = '<?=site_url("dashboard") ?>';
        }else{
          Swal.fire("Warning", data.text, "warning");
        }
      }
    });
  })
</script>

</body>
</html>
