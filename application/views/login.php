<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matka | Log in</title>

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
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?=site_url('login/validate') ?>" id="loginform" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email / Mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button class="btn btn-block btn-primary" id="loginbtn" type="submit"><i class="fa fa-user mr-2"></i> Sign In</button>
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <!--<a href="<?=site_url('login/forgotpass'); ?>">I forgot my password</a>-->
      </p>
      <p class="mb-0">
        <a href="<?=site_url('login/register'); ?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php $this->load->view('common/js'); ?>

<script type="text/javascript">
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
          Swal.fire("Success", "Logged in Successfully", "success");
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
