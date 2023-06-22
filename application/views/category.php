
<?php
include("inc/header.php");
?>







<style>
      .box
    {
      width:900px;
      padding:20px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:5px;
      margin-top:10px;
    }
</style>






<section class="content scrollable-section">
      <div class="container-fluid">
        <div class="container">
          <!-- right column -->
   <div class="col-12 col-md-12 p-2 ">

            <!-- general form elements disabled -->
         <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">ADD / EDIT / DELETE CATEGORY </h3>
                </div>  
              <!-- /.card-header -->
         <div class="card-body">
             


         <table class="table table-striped table-bordered">
        <thead>
          <tr>

          <th>CATEGORY NAME</th>

          <th>Action</th>

          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
            




















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







<!-- end  section -->


































  <?php
include("inc/footer.php");
?>



            
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>IndiaExcels/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="categoryname" contenteditable placeholder="Enter First Name"></td>';
        html += '<td><div class="col-4"><button type="button" name="btn_add" id="btn_add" style="width:100%;" class="btn btn-xs btn-success">ADD<span class="glyphicon glyphicon-plus"></span></button></div></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="categoryname" contenteditable>'+data[count].categoryname+'</td>';
          html += '<td><div class="col-4"><button type="button" style="width:100%;" name="delete_btn" id="'+data[count].id+'" class="btn btn-xs btn-danger btn_delete">DELETE<span class="glyphicon glyphicon-remove"></span></button></div></td></tr>';
        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('click', '#btn_add', function(){
    var categoryname = $('#categoryname').text();
  
    if(categoryname == '')
    {
      alert('Enter First Name');
      return false;
    }
    
    $.ajax({
      url:"<?php echo base_url(); ?>IndiaExcels/insert",
      method:"POST",
      data:{categoryname:categoryname},
      success:function(data){
        load_data();
      }
    })
  });

  $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>IndiaExcels/update",
      method:"POST",
      data:{id:id, table_column:table_column, value:value},
      success:function(data)
      {
        load_data();
      }
    })
  });

  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"<?php echo base_url(); ?>IndiaExcels/delete",
        method:"POST",
        data:{id:id},
        success:function(data){
          load_data();
        }
      })
    }
  });
  
});
</script>
