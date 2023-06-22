<?php
include("inc/header.php");
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->


<!-- Mirrored from labartisan.net/demo/template/lonelypro/lonelypro/events-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 08:23:45 GMT -->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->

<!--    <title>India Excels</title>-->

   
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/bootstrap.min.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/all.min.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/animate.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/nice-select.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/slick.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/slick-theme.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/odometer.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/magnific-popup.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/flaticon.css');?>">-->
<!--    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/main.css');?>">-->


<!--</head>-->

<!--<body>-->


    <!-- ==========Preloader Overlay Starts Here========== -->
<!--    <div class="overlayer">-->
<!--        <div class="loader">-->
<!--            <div class="loader-inner"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>-->
<!--    <div class="overlay"></div>-->
<!--    <div class="overlayTwo"></div>-->
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
<!--    <header>-->
      
<!--    <div class="header-top">-->
<!--            <div class="container">-->
<!--                <div class="header-top-area">-->
<!--                    <ul class="left">-->
<!--                        <li>-->
<!--                            <i class="far fa-clock"></i> 9:30am - 6:30pm Mon - Sun-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fas fa-phone-alt"></i> +800-123-4567 6587</a>-->
<!--                        </li>-->
                
<!--                    </ul>-->
<!--                    <ul class="social-icons">-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fab fa-facebook-messenger"></i></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fab fa-twitter"></i></a>-->
<!--                        </li>-->
                       
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->



<!--        <div class="header-bottom">-->
<!--            <div class="container">-->
<!--                <div class="header-wrapper">-->
<!--                    <div class="logo">-->
<!--                        <a href="#">-->
<!--                            <img src=" <?php echo base_url('assets/user/images/logo/logo.png');?>" alt="logo" style="height:80px;width:140px;">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="menu-area">-->
<!--                        <ul class="menu">-->
                             <?php  //if($this->session->userdata('uid')):      
    ?> 
<!--     <li>-->
<!--                                            <a href="<?php echo base_url();?>IndiaExcels/users_dashboard">DASHBOARD</a>-->
<!--     </li>-->
<!--      <li>-->
<!--                              <a href="<?php echo base_url();?>IndiaExcels/view_all_courses">COURSES</a>-->
<!--</li>-->
<!-- <li>-->
<!--                                <a href="<?php echo base_url();?>IndiaExcels/about">ABOUT</a>-->
<!--                            </li>-->
<!--  <li>-->
<!--                              <a href="<?php echo base_url();?>IndiaExcels/profile">PROFILE</a>-->
<!--</li>-->
<!--        <li>-->
<!--                                    <a href="<?php echo base_url();?>IndiaExcels/logout">LOGOUT</a>-->
<!--     </li>-->

                            

<?php //else:?>


<!--                             <li>-->
<!--                                <a href="<?php echo base_url();?>IndiaExcels/">HOME</a>-->
<!--                            </li>-->
<!--                             <li>-->
<!--                              <a href="<?php echo base_url();?>IndiaExcels/view_all_courses">COURSES</a>-->
<!--                            </li>-->
<!--                           <li>-->
<!--                                <a href="<?php echo base_url();?>IndiaExcels/about">ABOUT</a>-->
<!--                            </li>-->
<!--                            <li>              -->

<!--                                <a href="<?php echo base_url();?>IndiaExcels/logout">LOGIN</a>-->
                             
<!--                            </li>-->
                                
                                
                                
<!--                                <?php //endif;?>-->

                            
                            
                            
                            
                            
                           
<!--                        </ul>-->
                       
                        
<!--                        <div class="header-bar d-lg-none">-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                        </div>-->
<!--                        <div class="ellepsis-bar d-lg-none">-->
<!--                            <i class="fas fa-ellipsis-h"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->















             
   

     




    <section>
        <div class="container pt-5">
<h3 class="text-center">All Courses </h3>

    <div class="row " id="data-container">
    
    
  
<?php            

   foreach($courses as $course) : 



        
        
        ?>
    <div class="col-12 col-md-4 col-lg-3 pt-3 record">

        <div class="causes-item">
            <div class="causes-inner">
                <div class="causes-thumb">
                    <img src="<?php echo base_url('uploads/thumbnail/'.$course->coursethumbnail);?>" alt="causes" class="img-fluid" style="height:200px">
                  
                </div>
                <div class="causes-content bg-white">
                    <a href="#" class="causes-catagiry mb-2 text-uppercase theme-five"><?php echo $course->department ?></a>
                    <h4 class="title mb-3"><a href="#"><?php echo $course->coursename ?></a></h4>
                  
                    <a href="<?php echo base_url('IndiaExcels/coursepurchase/'.$course->id);?>" class="custom-button mt-2 theme-five-bg"><span>ENROLL NOW<i class="fas fa-heart ml-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>


    <?php      
  endforeach; 
  
  ?>


    
    


</div>
       
        
    </section>

    








    <?php
include("inc/footer.php");

?>



