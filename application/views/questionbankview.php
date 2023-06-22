<?php
include("inc/header.php");
?>
 







<div class="container scrollable-section">
		<div class="row">
			<div class="col-md-12">
      <h3 align="center">QUESTION BANK VIEW</h3>

				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('IndiaExcels/questionview') ?>" method="get">
							<div class="row g-3 align-items-center">
								<div class="col-auto">
									<label for="search_text" class="col-form-label">Search</label>
								</div>
								<div class="col-auto">
									<input type="text" placeholder="Search here" value="<?php if($this->input->get('search_text')){echo $this->input->get('search_text');}?>" id="search_text" name="search_text" class="form-control" aria-describedby="">
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
									<th>course</th>
									<th>question</th>
									<th>answer</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>

								<?php $i = 1;
								foreach ($questionbank as $val) { ?>
									<tr>
										<td><?= $i++ ?></td>
										<td><?= $val['course'] ?></td>
										<td><?= $val['question'] ?></td>
										<td><?= $val['answer'] ?></td>
										<td >
										

                 	<a style="color: green;" href="questionedit/<?php echo $val['id'] ?>"><i class="fas fa-edit"></i></a>
										<a style="color: red;" href="deletequestion/<?php echo $val['id'] ?>"><i class="fas fa-trash"></i></a>

            
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

