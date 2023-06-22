
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>files browser</title>

<style>
    body{
        font-family: 'segoe UI', Verdana,Helvetica,sans-serif;
        font-size: 80%;

    }
    #form{
        width: 600px;
    }
    #folderExplorer{
        float: left;
        width: 100px;
    }
    #fileExplorer{
        float: left;
        width: 680px;
        border-left: 1px solid #dff0ff;
    }

    .thumbnail {
        float: left;
        margin: 3px;
        padding: 3px;
        border: 1px solid #dff0ff;

    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    li {
        padding: 0;
    }


</style>

<script src="<?php echo base_url(); ?>assets\plugins\jquery\jquery.min.js"></script>

<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var funcNum = <?php echo $_GET['CKEditorFuncNum'].';'; ?>
    $('#fileExplorer').on('click','img',function() {
        var fileUrl = $(this).attr('title');
        window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
        window.close();
    }).hover(function(){
        $(this).css('cursor', 'pointer');

    });



});



</script>
</head>
<body>
    
<div id="fileExplorer">
<?php foreach($fileList as $fileName){
    ?>
<div class="thumbnail">
    <img src="<?php echo base_url().$fileName; ?>" alt=""
     title="<?php echo base_url().$fileName; ?>" width="120" height="100" />
    <?php echo base_url().$fileName; ?>

</div>

    <?php
}
?>
</div>



</body>
</html>