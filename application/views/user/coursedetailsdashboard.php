<?php
include("inc/header.php");
?>

<!--  -->







    <!-- ==========Events Single Section Starts Here========== -->
    <section class="events-single-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb--50 justify-content-center">
                <div class="col-lg-8 mb-50">
                    <div class="class-single-item">
                        <div class="class-single-inner">
                            <div class="event-thumb">
                            <div class="video-area">
                            <img src="<?php echo base_url('uploads/thumbnail/'.$coursedetails["coursethumbnail"]);?>" alt="events">

                            <a href="<?php echo base_url('uploads/videos/'.$coursedetails["coursevideos"]);?>" class="video-button popup"><i class="flaticon-play"></i><video src="<?php echo base_url('uploads/thumbnail/'.$coursedetails["coursevideos"]);?>"></video></a>
                        </div>
                            </div>
                            <div class="class-single-content">
                                <blockquote class="single-quote">
                                    <div class="quotes">
<?php
echo $coursedetails["short"];
?>

                                    </div>
                                </blockquote>
<?php
echo $coursedetails["content"];
?>

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
                                        <div class="ques cl-i-one"><i class="fas fa-calendar"></i>NAME</div>
                                        <div class="ans"><?php echo $this->session->userdata('name');?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-two"><i class="fas fa-clock"></i> EMAIL  </div>
                                        <div class="ans"><?php echo $this->session->userdata('email');?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-three"><i class="fas fa-calendar"></i>COURSENAME</div>
                                        <div class="ans">

<?php
echo $coursedetails["coursename"];
?>

                                    </li>
                                    <li>
                                        <div class="ques cl-i-four"><i class="fas fa-clock"></i>PRICE</div>
                                        <div class="ans"> RS  
<?php
echo $coursedetails["price"];
?>
                                        </div>
                                    </li>
                                    <div id="table">
                                        
                                    </div>
                                  
                                   
                                <li>
                                    <div
                                    class="form-group  align-items-center pl-1 w-100">

                                            <a href="<?php echo base_url();?>IndiaExcels/exam_question_btn/<?php echo $coursedetails["id"]; ?>" class="custom-button mt-2 theme-five-bg"><span>EXAM NOW</span></a>
 
                                            <a href="<?php echo base_url();?>certificate/certificate/<?php echo $coursedetails["coursename"]; ?>" class="custom-button mt-2 theme-five-bg"><span>Certificate</span></a>
                                      
                                      <?php if($this->session->flashdata('message')): 
                                                echo $this->session->flashdata('message');
                                            endif; ?>
                                             <?php if($this->session->flashdata('exam')): 
                                                echo $this->session->flashdata('exam');
                                            endif; ?>
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









<!--                      ------------------------------------------------------                                          ------------------------------------- -->







    <?php
include("inc/footer.php");
?>


