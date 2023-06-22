<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>India Excels | Log in</title>

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
      <p class="login-box-msg">Sign in to start your session</p>
      <?php if($this->session->flashdata('messages')): 
                                                echo $this->session->flashdata('messages');
                                            endif; ?>
      <form method="post" action="<?php echo base_url(); ?>IndiaExcels/login_validation">  
        <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" placeholder="Email Address"/>  

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        <span class="text-danger"><?php echo form_error('email'); ?></span>    

        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" />  

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"><?php echo form_error('password'); ?></span>  

          <!-- /.col -->
          <div class="px-auto mx-auto">
            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
          </div>

          <!-- /.col -->
          <div class="px-auto mx-auto pt-2">
          <a href="<?php echo base_url();?>IndiaExcels/signup">I Dont Have an Account</a>
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
