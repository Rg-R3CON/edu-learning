<?php
include("inc/header.php");
?>


   <style>
#timer{
    position:sticky;
    top:100px;
    background-color:red;
    color:white;
    width:50px;
    padding:10px;
    text-align:center;
    height:auto;
    border-radius:50%;

}


</style>


<?php $cid =  $this->session->userdata('cid'); ?>


    <?php if($this->session->flashdata('message')): ?>
    <script>
        swal({
  title: "<?php echo $this->session->flashdata('message'); ?> OUT OF 20",
  text: "RESULT",
  icon: "success",
  button: "OK",
});
    </script>
    <a href="<?php echo base_url('IndiaExcels/coursedetailsdashboard/'.$cid); ?>" class="btn btn-primary">BACK</a>
   
<?php endif; ?>







<?php if(!$question): 
                                                echo $this->session->flashdata('questions');


else:                                          
                                           ?>

<div id="timer">0:00</div>


<section class='container p-5 '>

<form method="post" action="<?php echo base_url('IndiaExcels/courseresult'); ?>">
<h3 class="title text-uppercase text-center">      
<?php echo $this->session->userdata('coursename'); ?>  Examination



</h3>

    <?php $sno = '1';
    foreach ($question as $questions): ?>

     


    <div class="entry-content p-5">
        <h5> QNO: <?php  echo $sno; ?></h5>
        <?php echo $questions->question; ?>
    </div>
<div class="row" style="padding-left:50px">
    <div class="col-1" style="padding-left:50px">     <input type="radio" name="<?php echo $questions->id; ?>" value="A" >  </div> 
    <div class="col-11 p-2"><label for=""><?php echo $questions->option1; ?></label>  </div> 

</div>
<div class="row" style="padding-left:50px">
    <div class="col-1" style="padding-left:50px">   <input type="radio" name="<?php echo $questions->id; ?>" value="B">  </div> 
    <div class="col-11 p-2"><label for=""><?php echo $questions->option2; ?></label>  </div> 

</div>
<div class="row" style="padding-left:50px">
    <div class="col-1" style="padding-left:50px">   <input type="radio" name="<?php echo $questions->id; ?>" value="C" required>  </div> 
    <div class="col-11 p-2"><label for=""><?php echo $questions->option3; ?></label>  </div> 

</div>
<?php $sno++; endforeach; ?>
<input type="hidden" name="course" value="<?php echo $questions->course; ?>">
    <input type="hidden" name="studentname" value="<?php echo $this->session->userdata('name'); ?>">
    <input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">





<div class="p-5">    <input type="submit" value="Submit Exam" style="height:50px; width:150px;" >

</div>
</form>



</section>




    
    
    
    <?php   endif; ?>
    
    
    
    

    <?php $cid = $this->session->userdata('cid'); ?>

    <script>
		var time = <?php echo '120' ?>;
		var timer = setInterval(function() {
			time--;
			if (time < 0) {
				clearInterval(timer);
				window.location.href = "<?php echo base_url('IndiaExcels/coursedetailsdashboard/'.$cid); ?>";
			} else {
				var minutes = Math.floor(time / 60);
				var seconds = time % 60;
				document.getElementById("timer").innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
			}
		}, 1000);
	</script>








    <?php
include("inc/footer.php");
?>


