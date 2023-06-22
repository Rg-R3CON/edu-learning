<?php
include("inc/header.php");
?>



   


<div class="container scrollable-section">
		<div class="row">
			<div class="col-md-12">
      <h3 align="center">COURSE VIEW</h3>

				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('IndiaExcels/feedbackview') ?>" method="get">
							<div class="row g-3 align-items-center">
								<div class="col-auto">
									<label for="feedback" class="col-form-label">Search</label>
								</div>
								<div class="col-auto">
									<input type="text" placeholder="Search here" value="<?php if($this->input->get('feedback')){echo $this->input->get('feedback');}?>" id="feedback" name="feedback" class="form-control" aria-describedby="">
								</div>
								<div class="col-auto">
									<input type="submit" class="btn btn-primary" value="Search" >
								</div>
							</div>
						</form>
						<table class="table table-striped table-bordered" style="margin-top: 20px">
							<thead>
								<tr>
									<th>SN</th>
									<th>name</th>
									<th>mail</th>
                                    <th>number</th>
                                    <th>feedback</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>
								<?php $i = 1;
								foreach ($feedbacks as $val) { ?>
									<tr>
										<td><?= $i++ ?></td>
										<td><?= $val['name'] ?></td>
										<td><?= $val['email'] ?></td>
                                        <td><?= $val['mobilenumber'] ?></td>
										<td><?= $val['feedback'] ?></td>

                                        
                                        <td>
											<?php if($val['approved'] == '0'): ?>
	                                                    
	                                                    <a style="color: green;" href="feedbackapprove/<?php echo $val['id']; ?>"><i class="fas fa-check"></i></a>
<?php elseif($val['approved'] == '1'): ?>
										                <a style="color: red;" href="feedbackdisapprove/<?php echo $val['id']  ?>"><i class="fas fa-times"></i></a>
	
				<?php endif; ?>
                 <a style="color: #3b4863;" href="feedbackdelete/<?php echo $val['id']  ?>"><i class="fas fa-trash"></i></a>


                    </td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<?=$links?>
				</div>
			</div>
		</div>
	</div>





















    <?php
include("inc/footer.php");
?>

