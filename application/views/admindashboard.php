<?php
include("inc/header.php");
?>
























    <section class="content container-fluid scrollable-section">




<div class="row">
    <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
    <div class="inner">
        <h3><?php echo $this->session->flashdata('department'); ?>            </h3>
        <p>Department</p>
    </div>
    
    <a href="<?php echo base_url();?>IndiaExcels/category" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
    </div>
</div>
    <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
    <div class="inner">
        <h3><?php echo $this->session->flashdata('course'); ?>            </h3>
        <p>Course</p>
    </div>
    <div class="icon">
        <i class="fa fa-building-o"></i>
    </div>
    <a href="<?php echo base_url();?>IndiaExcels/courseview" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
    </div>
</div>
    <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-blue">
    <div class="inner">
        <h3><?php echo $this->session->flashdata('question'); ?>       </h3>
        <p>QuestionBank</p>
    </div>
      <div class="icon">
        <i class="fa fa-graduation-cap"></i>
    </div>

    <a href="<?php echo base_url();?>IndiaExcels/questionview" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
    </div>
</div>
    <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
    <div class="inner">
        <h3><?php echo $this->session->flashdata('user'); ?></h3>
        <p>USERS</p>
    </div>
      <div class="icon">
        <i class="fa fa-users"></i>
    </div>
    <a href="<?php echo base_url();?>IndiaExcels/viewuser" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
    </div>
</div>
   


        
</div>

			</section>
			<!-- /.content -->








            <?php
include("inc/footer.php");
?>

