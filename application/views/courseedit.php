<?php
include("inc/header.php");
?>
<style>
label{
  font-size:34px;
}


</style>


    <!-- Main content -->
    <section class="content scrollable-section">
      <div class="container-fluid">
      <div class="container">
          <!-- right column -->
          <div class="col-md-12">

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">UPDATE COURSE</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             

              <?php foreach($courses as $course): ?>

                <?php echo form_open("IndiaExcels/updatecourse/$course->id", ['class' => 'form-horizontal','enctype' => 'multipart/form-data']); ?>

         <div class="col-12">
      
         <label>Course Name</label>
          <select name="department"  class="form-control select2-no-search">
          <option value="<?php echo $course->department ?>"><?php echo $course->department ?></option>

<?php if(count($department)): ?>
    <?php foreach($department as $departments): ?>
<option value="<?php echo $departments->categoryname ?>"><?php echo $departments->categoryname ?></option>
<?php endforeach; ?>
<?php endif; ?>
</select>


        </div><!-- col -->
        <div class="col-12 ">
          <label>Course Name</label>
          <input type="text" class="form-control" required="" name="coursename" value="<?php echo $course->coursename ?>">
        </div>   <!-- form-group -->

        <div class="col-12 ">
          <label>Price </label>
          <input type="number" class="form-control" required="" name="price"  value="<?php echo $course->price ?>">
          </div><!-- form-group -->

        <div class="col-12 py-5 row" >
              <div class="col-6 my-auto">          <label>Course Thumbnail</label>         </div>
             <div class="col-6"> <img src="<?php echo base_url('uploads/thumbnail/'.$course->coursethumbnail);?>"  class="img-fluid mb-2" style="border:1px solid #000;">     
             <input type="file" class="form-control"   required="" name="coursethumbnail">        </div>
             
         
          <input type="hidden" name="coursethumbnailold" value="<?php echo $course->coursethumbnail ?>">

        </div>   <!-- form-group -->


        <div class="col-12 pb-5 row" >

<div class="col-6 my-auto">   <label>Course Intro Video</label>      </div>
<div class="col-6"> 
  <video src="<?php echo base_url('uploads/intro/'.$course->courseintro);?>" style="height:auto; width:80%; border:2px solid #000;" controls=""></video>
          <input type="file" class="form-control"   name="courseintro" >
        </div>
         
          <input type="hidden" name="courseintroold" value="<?php echo $course->courseintro ?>">

        </div><!-- form-group -->
        <div class="col-12 pb-5 row" >
          <div class="col-6 my-auto">            <label>Course Video</label>         </div>
          <div class="col-6">       <video src="<?php echo base_url('uploads/videos/'.$course->coursevideos);?>" style="height:auto; width:80%; border:2px solid #000;" controls=""></video>
          <input type="file" class="form-control"   name="coursevideos" >    </div>

          <input type="hidden" name="coursevideosold" value="<?php echo $course->coursevideos ?>">

        </div><!-- form-group -->

        <div class=" col-sm-12 col-md-12 col-lg-12">
          <label>Course short Description</label>
          <textarea name="short" id="short" class="form-control ckeditor" value="<?php echo $course->short ?>"><?php echo $course->short ?></textarea>
          <script>
 CKEDITOR.replace( 'short', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>
        </div><!-- form-group -->



        <div class=" col-sm-12 col-md-12 col-lg-12">
          <label>Course Description</label>
          <textarea name="content" id="content" class="form-control ckeditor" ><?php echo $course->content ?></textarea>

          <script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "<?php echo site_url('IndiaExcels/upload_ckeditor');?>",
  filebrowserBrowseUrl: "<?php echo site_url('IndiaExcels/filebrowser');?>"
  
 });
</script>
        </div><!-- form-group -->

      
        <!-- row ended -->
        <div class="row row-sm mg-t-20 mt-5" style="padding-left:30%;padding-right:30%">
            <div class="col-12 " >
           <input type="submit"  class="btn btn-primary btn-rounded btn-block" value="UPDATE" style="width:80%;">
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


