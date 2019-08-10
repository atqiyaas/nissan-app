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
					<label for="brand" class="col-sm-3 control-label">Brand</label>
					<div class="col-sm-9">
						<select name="brand" id="brand" class="form-control">
							<option>Pilih Brand ... </option>
							<option <?php if ($brand==1) {
								echo 'selected';
							} ?> value="1">Nissan</option>
							<option <?php if ($brand==2) {
								echo 'selected';
							} ?>  value="2">Datsun</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="type" class="col-sm-3 control-label">Brand Type Brand</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="type" name="type" placeholder="Nama Brand Type" value="<?php echo $nama ?>">
					</div>
				</div>
				<div class="form-group m-b-0">
					<div class="offset-sm-3 col-sm-9">
						<button type="button" onclick="window.history.go(-1)" class="btn btn-warning waves-effect waves-light"><i class="fa fa-ban"></i> Batal</button>
						<button type="submit" name="submit" value="Submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i> Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

