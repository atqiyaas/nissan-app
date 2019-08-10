<div class="col-12 col-lg-12">
	<div class="content-box mt-20 fadeInUp animated">
		<div class="row no-gutters p-20 align-items-center">
			<div class="col-12 box-title"><?php echo $page ?></div>
		</div>
		
		<div class="px-20 pb-20">
			<?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">×</button>','</div>') ?>
			<form class="form-horizontal" method="post">
				<div class="form-group row">
					<label for="name" class="col-sm-3 control-label">Nama Customer</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nama Customer" value="<?php echo $name ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 control-label">Email Customer</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email Customer" value="<?php echo $email ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-sm-3 control-label">Telp. Customer</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="phone" name="phone" placeholder="No. Telephone" value="<?php echo $phone ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-sm-3 control-label">Alamat Customer</label>
					<div class="col-sm-9">
						<textarea name="address" class="form-control" placeholder="Alamat Customer"><?php echo $address ?></textarea>
					</div>
				</div>
				<div class="form-group m-b-0">
					<div class="offset-sm-3 col-sm-9">
						<button type="button" onclick="window.history.go(-1)" class="btn fw-sm-120 rounded-half-circle mb-5 btn-secondary"><i class="icon mdi mdi-arrow-left" aria-hidden="true"></i> Batal</button>
						<button type="submit" name="submit" value="Submit" class="btn fw-sm-120 rounded-half-circle mb-5 btn-success"><i class="icon mdi mdi-content-save" aria-hidden="true"></i> Update</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


