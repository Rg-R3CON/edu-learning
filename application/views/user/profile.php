<?php
include("inc/header.php");

?>

<section class="content">
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
             



            

    <div class="p-5">
        
      
     
    <?php foreach($users as $user): ?>
        <div class="col-12 col-md-12">
          <label>NAME</label>
          <input type="text" class="form-control" readonly=""  value="<?php echo $user->name ?>" >
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>MOBILE NUMBER</label>
          <input type="text" class="form-control" readonly="" value="<?php echo $user->number ?>"  >
        </div><!-- form-group -->
        <div class="col-12 col-md-12">
          <label>EMAIL</label>
          <input type="email" class="form-control" readonly=""  value="<?php echo $user->email ?>"  >
        </div><!-- form-group -->
        <?php    endforeach; ?>
            <div class="col-12 col-md-12">
          <label>COURSE</label>
          <?php foreach($result as $results): ?>

          <input type="text" class="form-control" readonly=""  value="<?php echo $results->coursename ?>"  >

          <?php    endforeach; ?>
        </div><!-- form-group -->

 </div> 
 </div>























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












    <?php
include("inc/footer.php");

?>

















