<div class="col-12 col-lg-12 mb-20">
	<div class="content-box fadeInUp animated">
		<div class="row no-gutters p-20 align-items-center">
			<div class="col-12 box-title"><?php echo $page ?></div>
		</div>
		<div class="px-20 pb-20">
			<div class="card-deck">
				<div class="card">
					<div class="card-body bg-primary">
						<h5 class="card-title text-white">
							<?php echo $nama ?>
						</h5>
						<p class="card-text text-white">
							<i class="icon mdi mdi-email" aria-hidden="true"></i> e-mail: <?php echo $email ?>
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><i class="icon mdi mdi-cellphone-iphone" aria-hidden="true"></i> Phone: <?php echo $phone ?></li>
						<li class="list-group-item"><i class="icon mdi mdi-home-map-marker" aria-hidden="true"></i> Address: <?php echo $address ?></li>
						<li class="list-group-item"><i class="icon mdi mdi-calendar-clock" aria-hidden="true"></i> Registered at: <?php echo date('d F Y H:i:s A',$registered) ?></li>
					</ul>
					<div class="card-body">
						<button type="button" onclick="window.history.go(-1)" class="btn fw-sm-120 rounded-half-circle mb-5 btn-primary"><i class="icon mdi mdi-arrow-left" aria-hidden="true"></i> Back</button>
						<a href="<?php echo base_url('customer/edit_customer') ?>/<?php echo $id ?>" class="btn fw-sm-120 rounded-half-circle mb-5 btn-info"><i class="icon mdi mdi-circle-edit-outline" aria-hidden="true"></i> Edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
