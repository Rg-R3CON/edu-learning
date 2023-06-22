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
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
            
              <?php foreach($users as $user): ?>
 <?php echo form_open("IndiaExcels/updateuser/$user->id", ['class' => 'form-horizontal']); ?>

    <div class="p-5">
     

        <div class="col-12 col-md-12">
          <label>name</label>
          <input type="text" class="form-control" placeholder="Enter your full name" autocomplete="off" value="<?php echo $user->name ?>" required="" name="name">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>mobile number</label>
          <input type="text" class="form-control" placeholder="Enter your mobile number" value="<?php echo $user->number ?>" required="" name="mobile_number">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" value="<?php echo $user->email ?>" required="" name="email">
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>Password</label>
          <input type="password" class="form-control" placeholder=""  autocomplete="off"  required="" name="password">
        </div><!-- form-group -->
        <div class="row row-sm mg-t-20 mt-5" style="padding-left:30%;padding-right:30%">
            <div class="col-12 " >
           <input type="submit"  class="btn btn-primary btn-rounded btn-block" value="ADD" style="width:80%;">
 </div>  
 </div> 
 </div>


 <?php  echo form_close(); ?>


      <?php    endforeach; ?>



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