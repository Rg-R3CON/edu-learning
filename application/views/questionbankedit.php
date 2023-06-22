<?php
include("inc/header.php");
?>












<section class="content scrollable-section">
      <div class="container-fluid">
        <div class="container">
          <!-- right column -->
   <div class="col-12 col-md-12 p-2 ">

            <!-- general form elements disabled -->
         <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">UPDATE QUESTIONS </h3>
                </div>  
              <!-- /.card-header -->
         <div class="card-body">
             

         <?php foreach($questions as $question): ?>


          <?php echo form_open("IndiaExcels/updatequestion/$question->id", ['class' => 'form-horizontal','enctype' => 'multipart/form-data']); ?>
    <div class="container">
         <div class="col-12">
      
         <select name="course"  class="form-control select2-no-search">
              <option value="<?php echo $question->course ?>"><?php echo $question->course ?></option>

            <?php foreach($coursename as $coursenames): ?>
        <option value="<?php echo $coursenames->coursename ?>"><?php echo $coursenames->coursename ?></option>
<?php endforeach; ?>
    </select>



        </div><!-- col -->
        <div class="col-12 ">
          <label>QUESTION</label>
<textarea name="question" id="question" style=" height:100px; width:100px;"  value="<?php echo $question->question ?>"><?php echo $question->question ?></textarea>
</div>      
<script>
CKEDITOR.replace( 'question')

                       
</script>       
 </div><!-- form-group -->


 
        <div class="col-12 ">
          <label>OPTION A</label>
          <textarea name="option1" id="option1" style=" height:100px; width:100px;"  value="<?php echo $question->option1 ?>"><?php echo $question->option1 ?></textarea>
          <script>
CKEDITOR.replace( 'option1')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
          <label>OPTION B</label>
          <textarea name="option2" id="option2" style=" height:100px; width:100px;" value="<?php echo $question->option2 ?>"><?php echo $question->option2 ?></textarea>
          <script>
CKEDITOR.replace( 'option2')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
          <label>OPTION C</label>
          <textarea name="option3" id="option3" style=" height:100px; width:100px;" value="<?php echo $question->option3 ?>"><?php echo $question->option3 ?></textarea>
          <script>
CKEDITOR.replace( 'option3')

                       
</script> 

        </div><!-- form-group -->


        <div class="col-12 ">
        <label>ANSWER</label>
      <select class="form-control select2-no-search" name="answer" required="">
      <option value="<?php echo $question->answer ?>">OPTION <?php echo $question->answer ?></option>
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


       