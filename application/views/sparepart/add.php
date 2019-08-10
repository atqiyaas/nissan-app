<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-md-6 offset-3">
							<h4 class="page-title m-0"><?php echo $page ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Horizontal form -->
			<div class="col-lg-6 offset-3">
				<div class="card">
					<div class="card-body">
						<h4 class="m-t-0 m-b-30">Add New Sparepart</h4>
						<?php echo validation_errors('<div class="alert alert-danger text-center font-weight-bold">','</div>') ?>
						<form class="form-horizontal" method="post">
							<div class="form-group row">
								<label for="name" class="col-sm-3 control-label">Nama Sparepart</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="name" name="name" placeholder="Nama sparepart" value="<?php set_value('name') ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="qty" class="col-sm-3 control-label">Quantity</label>
								<div class="col-sm-9">
									<div class="input-group m-b-15">
									<input type="number" min="1" class="form-control" id="qty" name="qty" placeholder="Qty" value="<?php set_value('qty') ?>">
										<div class="input-group-append">
											<span class="input-group-text b-0">Pcs</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="harga" class="col-sm-3 control-label">Harga Sparepart</label>
								<div class="col-sm-9">
									<div class="input-group m-b-15">
										<div class="input-group-append">
											<span class="input-group-text b-0">Rp.</span>
										</div>
										<input type="number" min="1" class="form-control" id="harga" name="harga" placeholder="Harga Sparepart" value="<?php set_value('harga') ?>">
									</div>
								</div>
							</div>
							<div class="form-group m-b-0">
								<div class="offset-sm-3 col-sm-9">
									<a onclick="window.history.go(-1)" class="btn btn-rounded btn-warning"><i class="fa fa-ban"></i> Cancel</a>
									<button type="submit" name="submit" value="Submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i> Simpan</button>
								</div>
							</div>
						</form>
					</div> <!-- card-body -->
				</div> <!-- card -->
			</div> <!-- col -->

		</div>  

	</div><!-- End row -->   
</div>