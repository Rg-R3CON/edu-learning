<?php
include("inc/header.php");
?>



    <!-- Main content -->

       

    <section class="content scrollable-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">COURSE DETAILS </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>

                   
                  </tr>
                  </thead>
                
                
                <?php               
   foreach($users as $user) : 
          ?>
                
                  <tbody>
                  <tr>

                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->email ?></td>
                    <td>
                        			<a style="color: green;" href="edituser/<?php echo $user->id; ?>"><i class="fas fa-edit"></i></a>
										<a style="color: red;" href="deleteuser/<?php echo $user->id; ?>"><i class="fas fa-trash"></i></a>
										
                        										<!--<a style="color: red;" href="deleteuser/<?php echo $user->id; ?>"><i class="fas fa-lock"></i></a>-->
                        										<!--<a style="color: red;" href="deleteuser/<?php echo $user->id; ?>"><i class="fas fa-unlock"></i></a>-->

                            </td>
                 </tr>
                  <tr>

                  <?php    endforeach; ?>




                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


































    <?php
include("inc/footer.php");
?>