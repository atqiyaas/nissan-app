<div class="col-12 col-lg-12">
	<div class="content-box mt-20 fadeInUp animated">
		<div class="row no-gutters p-20 align-items-center">
			<div class="col-12 box-title"><?php echo $page ?></div>
		</div>
		
		<div class="px-20 pb-20">
			<div class="mb-20">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmobil"><i class="icon mdi mdi-plus"></i> Tambah Mobil </button>
			</div>
			<table class="table table-light table-hover">
				<thead>
					<tr class="text-center">
						<th scope="col">No.</th>
						<th scope="col">Nama Brand</th>
						<th scope="col">Type</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<?php $no=1;
				foreach ($datsun as $key): ?>
					<tbody>
						<tr class="text-center">
							<td><?php echo $no++ ?></td>
							<td><?php echo $key->nama_brand ?></td>
							<td><?php echo $key->nama_brand.' '.$key->nama_brand_type ?></td>
							<td>
								<a href="<?php echo base_url('mobil/update') ?>/<?php echo $key->id_brand_type ?>" class="btn btn-sm btn-info"><i class="icon mdi mdi-square-edit-outline"></i> Edit</a>
								<a onclick="return confirm('Yakin Mau dihapus?')" href="<?php echo base_url('mobil/delete') ?>/<?php echo $key->id_brand_type ?>" class="btn btn-sm btn-danger"><i class="icon mdi mdi-trash-can"></i> Hapus</a>
							</td>
						</tr>
					</tbody>
					<?php 
				endforeach; ?>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="addmobil" tabindex="-1" role="dialog" aria-labelle aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<form method="post" action="<?php echo base_url('mobil/add') ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Tambah Data Mobil
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="brand" class="col-sm-3 control-label">Brand</label>
						<div class="col-sm-9">
							<select name="brand" id="brand" class="form-control">
								<option>Pilih Brand ... </option>
								<option value="1">Nissan</option>
								<option value="2">Datsun</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="type" class="col-sm-3 control-label">Brand Type Brand</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="type" name="type" placeholder="Nama Brand Type">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon mdi mdi-window-close"></i> Close</button>
					<button type="submit" name="submit" value="Submit" class="btn btn-primary"><i class="icon mdi mdi-content-save-outline"></i> Save</button>
				</div>
			</div>
		</form>
	</div>
</div>