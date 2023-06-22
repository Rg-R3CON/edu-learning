
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php echo form_open("Welcome/imgupload", ['class' => 'form-horizontal','enctype' => 'multipart/form-data']); ?>


    <!--new field added-->
<div class="row row-sm mg-t-20">
  <div class="col-sm-4 col-md-3 col-lg-3">
    <p class="mg-b-10">Right To Work</p>
    <div class="custom-file">
      <input type="file" name="righttowork" class="custom-file-input"  id="customFile" >
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
  </div><!-- col -->
</div>
<!--new field end-->
  
  
  
  
  
  
  
  
  
  

<div class="row row-sm mg-t-20">
  <div class="col-sm-4 col-md-3 col-lg-3">
<input type="submit" name="" class="btn btn-indigo btn-rounded btn-block" value="Submit">
</div></div>
<?php  echo form_close(); ?>

</body>
</html>