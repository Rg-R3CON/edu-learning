
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>India Excels | Log in</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <script src="<?php echo base_url('assets/dist/ckeditor/ckeditor.js');?>"></script>

  <!-- <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script> -->

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
    <img class="animation__shake" src=" <?php echo base_url('assets/user/images/logo/logo.png');?>" alt="INDIA_EXCELS" height="60" width="60" style="height:60px;width:60px;">

  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>IndiaExcels/enter" class="nav-link">Home</a>
      </li>
     
    </ul>
    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->




  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed; height:100%;">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>IndiaExcels/enter" class="brand-link">

    <img src="<?php echo base_url('assets/user/images/logo/logo.png');?>" alt="INDIA EXCELS" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">INDIA EXCELS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline pt-5 mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       
        



       <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/enter" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

            </ul>
          </li>


         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD Category</p>
                </a>
              </li>        
            </ul>
          </li>


            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                COURSE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/course" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD COURSE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/courseview" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW COURSE</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
               QUESTION BANK
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/questionbank" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD QUESTION</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/questionview" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW QUESTION</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/viewuser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW User</p>
                </a>
              </li>




            </ul>
          </li>

<li class="nav-item">
            <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
              <p>
                Feedback
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url();?>IndiaExcels/feedbackview" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW FEEDBACK</p>
                </a>
              </li>




            </ul>
          </li>




          <li class="nav-item menu-open">

          <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo base_url();?>IndiaExcels/logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LOGOUT</p>
                </a>
              </li>

            </ul>
            </li>
  
        
          
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

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
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>IndiaExcels/enter">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <style>
  .currencyinput {
    border: 1px inset #ccc;
}
.currencyinput input {
    border: 0;
}

.scrollable-section {
  position: relative;
  /* height: 300px; set a fixed height for the scrollable section */
  overflow-y: scroll;
}


</style>




