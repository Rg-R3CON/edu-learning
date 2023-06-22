<?php
include("inc/header.php");

?>





   <div class="video">
                    <video width="100%" height="20%" autoplay="" loop="" muted="" >
                        <source src="<?php echo base_url('assets/upload/dashboardvideo.mp4');?>" type="video/mp4" />
                    </video>
            </div>
   
    <?php  if($this->session->flashdata('paiduser')):       
    ?>

                                                <section>
                                                <div class="container pt-5">
                                                    <h3 class="text-center">Your Course </h3>
                                                    <div class="row" style="align-items: flex-end;">
                                            
                                            
                                        
                   
                        
                    
    <?php
foreach($result as $results): ?>


<div class="col-12 col-md-4 col-lg-3 pt-3">

<div class="causes-item">
    <div class="causes-inner">

        <div class="causes-thumb">
            <a href="<?php echo base_url('IndiaExcels/coursedetailsdashboard/'.$results->id);?>" class="custom-button mt-2 " style="width:100%;height:100%;">
            <img src="<?php echo base_url('uploads/thumbnail/'.$results->coursethumbnail);?>" alt="courses" class="img-fluid" style="height:200px; width:100%;">
          </a>
        </div>
        <div class="causes-content bg-white">
            <a href="#" class="causes-catagiry mb-2 text-uppercase "><?php echo $results->department ?></a>
            <h4 class="title mb-3"><a href="#"><?php echo $results->coursename ?></a></h4>
          
            <a href="<?php echo base_url('IndiaExcels/coursedetailsdashboard/'.$results->id);?>" class="custom-button mt-2 "><span>ENROLL NOW<i class="fas fa-heart ml-2"></i></span></a>
        </div>

    </div>
</div>

</div>


<?php endforeach; ?>
            
            

                                                
                                            
            
            
                                        </div>
                                                </div >
                    </section>



     <?php endif; ?>





    <section>
        <div class="container pt-5">
                                                    <h3 class="text-center">All Courses </h3>

    <div class="row " id="data-container">
    
    
  
<?php 
$sno = '1';

   foreach($courses as $course) : 


if($sno <= '4'):
        
        
        ?>
    <div class="col-12 col-md-4 col-lg-3 pt-3 record">

        <div class="causes-item">
            <div class="causes-inner">
                <div class="causes-thumb">
                                        <a href="<?php echo base_url('IndiaExcels/coursepurchase/'.$course->id);?>" style="width:100%;height:100%;">      

                    <img src="<?php echo base_url('uploads/thumbnail/'.$course->coursethumbnail);?>" alt="causes" class="img-fluid" style="height:200px; width:100%;">
                  </a>
                </div>
                <div class="causes-content bg-white">
                    <a href="#" class="causes-catagiry mb-2 text-uppercase theme-five"><?php echo $course->department ?></a>
                    <h4 class="title mb-3"><a href="#"><?php echo $course->coursename ?></a></h4>
                  
                    <a href="<?php echo base_url('IndiaExcels/coursepurchase/'.$course->id);?>" class="custom-button mt-2 theme-five-bg"><span>ENROLL NOW<i class="fas fa-heart ml-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>

</a>
    <?php      
$sno++;    
    endif;  

  endforeach; 

  ?>

</div>
        </div >
   <div class="text-center mx-auto px-auto mt-3">   <a href="<?php echo base_url('IndiaExcels/view_all_courses');?>" class="btn" style="background:#000; color:#fff;"> view more courses </a>            </div> 

    </section>








    <section class="pt-3 mt-5" id="feedback">


    <style>
 

.col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel-item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #db584e;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}






    
</style>






<div class="container">
<h3 style="color:#310552; text-align:center;">FEEDBACK</h3>

	<div class="row">

    <div class="col-md-6 ">
    <span class="text-danger"> <?php echo validation_errors(); ?></span>    

    <form method="post" action="<?php echo base_url('IndiaExcels/feedbackform'); ?>">

         
          <div class="item">
            <p>Name</p>
            <div class="name-item">

              <input type="text" name="name" placeholder="FULL NAME" required=""/>
            </div>
          </div>
         
         
         
        
          <div class="item">
            <p>Phone</p>

            <input type="text" name="mobilenumber" required=""/>            
         </div>
          <div class="item">
            <p>Email</p>
            <input type="text" name="email" required=""/>
          </div>
   
          <div class="item">
              <p>Feedback</p>
              <textarea rows="3"  name="feedback" placeholder="Feedback, Minimum word limit is 10" id="textarea" required=""></textarea>
            </div>
          <div class="btn-block">
            <button type="submit" style="background:#310552;">SUBMIT</button>
          </div>
        </form>


    </div>
		<div class="col-md-6 col-center m-auto">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel -->
				<div class="carousel-inner">
                <div class="item carousel-item active">
						<div class="img-box"><img src="<?php echo base_url('assets/user/feedback/user.png');?>" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>jrny</b>, Office Worker</p>
					</div>
           <?php     foreach($feedback as $feedbacks) : 
?>



					<div class="item carousel-item">
						<div class="img-box"><img src="<?php echo base_url('assets/user/feedback/user.png');?>" alt=""></div>
						<p class="testimonial"><?= $feedbacks->feedback; ?></p>
						<p class="overview"><b><?= $feedbacks->name; ?></b></p>
					</div>


                    <?php      
  endforeach; 
  
  ?>


					
				</div>
				<!-- Carousel Controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>


    </section>


    <?php
include("inc/footer.php");

?>











