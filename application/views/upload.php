














<?php
// this is old php code to upload img to ckediter
// //upload.php



if(isset($_FILES['upload']['name']))
{
 $file = $_FILES['upload']['tmp_name'];
 $file_name = $_FILES['upload']['name'];
 $file_name_array = explode(".", $file_name);
 $extension = end($file_name_array);
 $new_image_name = rand() . '.' . $extension;
 chmod('upload', 0777);
 $allowed_extension = array("jpg", "gif", "png", "mp4");
 if(in_array($extension, $allowed_extension))
 {
  move_uploaded_file($file, 'upload/' . $new_image_name);
  $function_number = $_GET['CKEditorFuncNum'];
  $url = 'upload/' . $new_image_name;
  $message = '';
  echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
 }
}









?>

<?php
// if(isset($_FILES['upload'])) {
//     $file = $_FILES['upload'];
//     $file_name = $file['name'];
//     $file_tmp = $file['tmp_name'];
//     $file_size = $file['size'];
//     $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

//     // Check file type and size
//     $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'mp4', 'avi', 'mov');
//     $max_file_size = 10 * 1024 * 1024; // 10 MB
//     if(!in_array($file_ext, $allowed_extensions) || $file_size > $max_file_size) {
//         echo "Invalid file. Please upload a file with a valid extension and less than 10MB in size.";
//         exit;
//     }

//     // Upload file to server
//     $upload_dir = 'uploads/';
//     $file_name_new = uniqid('', true) . '.' . $file_ext;
//     // $file_name_new = 'text' . '.' . $file_ext;

//     $file_path = $upload_dir . $file_name_new;
//     if(move_uploaded_file($file_tmp, $file_path)) {
//         $url = '/' . $file_path; // URL to file
//         echo "<script>window.parent.CKEDITOR.tools.callFunction({$_GET['CKEditorFuncNum']}, '$url', '');</script>";
//     } else {
//         echo "Error uploading file. Please try again.";
//         exit;
//     }
// }
?>
