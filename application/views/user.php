<?php
include("inc/header.php");
?>



    <!-- Main content -->
    <section class="content scrollable-section">
      <div class="container-fluid">
        <div class="container">
          <!-- right column -->
          <div class="col-md-12">

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"> ADD USER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             



            

<form action="createuser" method="post">
    <div class="p-5">       

        <div class="col-12 col-md-12">
          <label>name</label>
          <input type="text" class="form-control" placeholder="Enter your full name" value="" required=""  autocomplete="off" name="name">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>mobile number</label>
          <input type="text" class="form-control" placeholder="Enter your mobile number" value="" required="" name="mobile_number">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" value="" required=""  autocomplete="off" name="email">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your password" value="" required=""  autocomplete="off" name="password">
        </div><!-- form-group -->
        <div class="row row-sm mg-t-20 mt-5" style="padding-left:30%; padding-right:30%">
            <div class="col-12 " >
           <input type="submit"  class="btn btn-primary btn-rounded btn-block" value="ADD" style="width:80%;">
 </div> 
 </div> 
 </div>

      </form>






















              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
















    <?php
include("inc/footer.php");
?>


