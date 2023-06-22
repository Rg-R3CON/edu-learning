<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>India Excels | Sign up</title>

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="#"><b>India</b> Excels</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">

    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign up to start your session</p>
     
      <span class="text-danger"> <?php echo validation_errors(); ?></span>    

      <form method="post" action="<?php echo base_url(); ?>IndiaExcels/signup_validation">  


      <div class="input-group mb-3">
        <input type="text" name="username"  class="form-control" placeholder="Full Name" autocomplete="off" value="<?php echo set_value('username'); ?>">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>

        </div>

        <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>

        
        <div class="input-group mb-3">
        <input type="text" name="mobile_number" class="form-control" placeholder="mobile_number" value="<?php echo set_value('mobile_number'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>

        </div>


        <label for="">password</label>

        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" autocomplete="off"/>  

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <label for="">Confirm Password</label>

        <div class="input-group mb-3">
        <input type="password" name="confirm_password" class="form-control" autocomplete="off"/>  

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="px-auto mx-auto">
            <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
          </div>
          <!-- /.col -->

          <div class="px-auto mx-auto pt-2">
              <a href="<?php echo base_url();?>IndiaExcels/login">I Have an Account</a>
        </div>


      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>

</body>
</html>
