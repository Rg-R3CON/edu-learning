
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->


<!-- Mirrored from labartisan.net/demo/template/lonelypro/lonelypro/events-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 08:23:45 GMT -->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->

<!--    <title>COURSENAME</title>-->

   
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
<!--                            <li>-->
<!--                            <?php  //if($this->session->flashdata('paiduser')):       -->
    ?> 
<!--                                    <a href="<?php echo base_url();?>IndiaExcels/users_dashboard">DASHBOARD</a>-->
<?php //else:?>
<!--                                <a href="<?php echo base_url();?>IndiaExcels/">HOME</a>-->
<!--                                <?php// endif;?>-->


<!--                            </li>-->
                         
<!--                            <li>              -->
<!--<?php  //if($this->session->flashdata('paiduser')):    ?> -->
<!--                                    <a href="<?php echo base_url();?>IndiaExcels/logout">LOGOUT</a>-->
<!--<?php //else:?>-->
<!--                         <a href="<?php echo base_url();?>IndiaExcels/about">ABOUT</a>-->

<!--                                <a href="<?php echo base_url();?>IndiaExcels/logout">LOGIN</a>-->
<!--                                <?php// endif;?>-->
          
<!--                            </li>-->
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
    <!-- ==========Header Section Ends Here========== -->



    <!-- ==========Banner Section Starts Here========== -->







<?php
include("inc/header.php");
?>


















<?php               
   foreach($courses as $course) : 
          ?>


    <!-- ==========Events Single Section Starts Here========== -->
    <section class="events-single-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb--50 justify-content-center">
                <div class="col-lg-8 mb-50">
                    <div class="class-single-item">
                        <div class="class-single-inner">
                            <div class="event-thumb">
                                
                            <div class="video-area">
                            <img src="<?php echo base_url('uploads/thumbnail/'.$course->coursethumbnail);?>" alt="events">

                            <a href="<?php echo base_url('uploads/intro/'.$course->courseintro);?>" class="video-button popup"><i class="flaticon-play"></i></a>
                        </div>

                            </div>
                            <div class="class-single-content">
                                <blockquote class="single-quote">
                                    <div class="quotes">
                                    <?php
echo $course->short;

?>
                                    </div>
                                </blockquote>
                              
                            </div>
                          

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 mb-50">
                    <aside>
                        <div class="widget widget-feature">
                            <div class="widget-header">
                                <h5 class="title">DETAILS</h5>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li>
                                        <div class="ques cl-i-one"><i class="fas fa-calendar"></i>COURSENAME</div>
                                        <div class="ans"><?php echo $course->coursename;?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-two"><i class="fas fa-clock"></i> TOTAL DURATION  </div>
                                        <div class="ans">LIFE LONG</div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-three"><i class="fas fa-calendar"></i>PRICE</div>
                                        <div class="ans"><?php echo "RS ".$course->price?></div>
                                    </li>
                                  
                                <li>
                                    <div class="form-group  align-items-center pl-1 w-100">
                                    <a href="<?php echo base_url('IndiaExcels/Payment/'.$course->id);?>" class="custom-button mt-2 theme-five-bg"><span>ENROLL NOW<i class="fas fa-heart ml-2"></i></span></a>
                                </div>
                                </li>
                                
                                </ul>
                            </div>
                        </div>
                      
                           
                        </div>
                                     
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Events Single Section Ends Here========== -->


    <?php    endforeach; ?>





























    <?php
include("inc/footer.php");

?>



