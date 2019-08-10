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
					<label for="name" class="col-sm-3 control-label">Nama Sparepart</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nama sparepart" value="<?php echo $name ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="qty" class="col-sm-3 control-label">Quantity</label>
					<div class="col-sm-9">
						<div class="input-group m-b-15">
							<input type="number" min="1" class="form-control" id="qty" name="qty" placeholder="Qty" value="<?php echo $qty ?>">
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
							<input type="number" min="1" class="form-control" id="harga" name="harga" placeholder="Harga Sparepart" value="<?php echo $harga ?>">
						</div>
					</div>
				</div>
				<div class="form-group m-b-0">
					<div class="offset-sm-3 col-sm-9">
						<a onclick="window.history.go(-1)" class="btn btn-rounded btn-warning"><i class="icon mdi mdi-cancel"></i> Cancel</a>
						<button type="submit" name="submit" value="Submit" class="btn btn-success waves-effect waves-light"><i class="icon mdi mdi-content-save"></i> Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

