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
             



              <form action="createcourse" method="post" enctype="multipart/form-data">
    <div class="">
         <div class="col-12">
      
          <p class="mg-b-10">Department</p>
          <select name="department"  class="form-control select2-no-search">

<?php if(count($department)): ?>
    <?php foreach($department as $departments): ?>
<option value="<?php echo $departments->categoryname ?>"><?php echo $departments->categoryname ?></option>
<?php endforeach; ?>
<?php endif; ?>
</select>


        </div><!-- col -->
        <div class="col-12 ">
          <label>Course Name</label>
          <input type="text" class="form-control" placeholder="Enter your full name" value="" required="" name="coursename">
        </div><!-- form-group -->
        <div class="col-12 ">
          <label>Price </label>
          <input type="number" class="form-control" placeholder="RS : 100"  required="" name="price">
          </div><!-- form-group -->
        <div class="col-12 ">
          <label>Course Thumbnail</label>
          <input type="file" class="form-control"   required="" name="coursethumbnail">
        </div><!-- form-group -->
        <div class="col-12 ">
          <label>Course Intro Video</label>
          <input type="file" class="form-control"   required="" name="courseintro">
        </div><!-- form-group -->



        <div class="col-12 ">
          <label>Course Video</label>
          <input type="file" class="form-control"   required="" name="coursevideos">
        </div><!-- form-group -->

        <div class=" col-sm-6 col-md-12 col-lg-12">
          <label>Course short Description</label>
          <textarea name="short" id="short" class="form-control ckeditor"></textarea>
          <script>
 CKEDITOR.replace( 'short', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>
        </div><!-- form-group -->



        <div class=" col-sm-6 col-md-12 col-lg-12">
          <label>Course Description</label>
          <textarea name="content" id="content" class="form-control ckeditor"></textarea>
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

