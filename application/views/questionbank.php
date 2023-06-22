<?php
include("inc/header.php");
?>







    <!-- Main content -->
    <section class="content scrollable-section">
      <div class="container-fluid">
        <div class="container">
          <!-- right column -->
   <div class="col-12 col-md-12 p-2 ">

            <!-- general form elements disabled -->
         <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">ADD COURSES </h3>
                </div>  
              <!-- /.card-header -->
         <div class="card-body">
             



         <form action="createquestion" method="post" enctype="multipart/form-data">
    <div class="">
         <div class="col-12">
      
         <p class="mg-b-10">COURSE</p>

              <select name="course"  class="form-control select2-no-search">

        <?php if(count($coursename)): ?>
            <?php foreach($coursename as $coursenames): ?>
        <option value="<?php echo $coursenames->coursename ?>"><?php echo $coursenames->coursename ?></option>
<?php endforeach; ?>
        <?php endif; ?>
    </select>


        </div><!-- col -->
        <div class="col-12 ">
          <label>QUESTION</label>
          <textarea name="question" id="question" style=" height:100px; width:100px;"></textarea>
</div>      
<script>
CKEDITOR.replace( 'question')

                       
</script>       
 </div><!-- form-group -->


 
        <div class="col-12 ">
          <label>OPTION A</label>
          <textarea name="option1" id="option1" style=" height:100px; width:100px;"></textarea>
          <script>
CKEDITOR.replace( 'option1')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
          <label>OPTION B</label>
          <textarea name="option2" id="option2" style=" height:100px; width:100px;"></textarea>
          <script>
CKEDITOR.replace( 'option2')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
          <label>OPTION C</label>
          <textarea name="option3" id="option3" style=" height:100px; width:100px;"></textarea>
          <script>
CKEDITOR.replace( 'option3')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
        <label>ANSWER</label>
      <select class="form-control select2-no-search" name="answer" required="">
        <option label="Choose one"></option>
        <option value="A">OPTION A</option>
        <option value="B">OPTION B </option>
        <option value="C">OPTION C </option>

      </select>

        </div><!-- form-group -->

        <!-- row ended -->
        <div class="row row-sm mg-t-20 mt-5" style="padding-left:30%;padding-right:30%">
            <div class="col-12 " >
           <input type="submit" class="btn btn-primary btn-rounded btn-block" value="ADD" style="width:80%;">
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
