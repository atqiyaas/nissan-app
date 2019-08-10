<div class="col-12 col-lg-12">
	<div class="content-box mt-20 fadeInUp animated">
		<div class="row no-gutters p-20 align-items-center">
			<div class="col-12 box-title"><?php echo $page ?></div>
		</div>
		
		<div class="px-20 pb-20">
			<div class="mb-20">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addadmin"><i class="icon mdi mdi-plus"></i> Tambah Admin </button>
			</div>
			<?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">×</button>','</div>') ?>
			<?= $this->session->flashdata('message'); ?>
			<table class="table table-light table-bordered">
				<thead>
					<tr class="text-center">
						<th scope="col">No.</th>
						<th scope="col">Nama Administrator</th>
						<th scope="col">Email</th>
						<th scope="col">Tgl daftar</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<?php $no=1;
				foreach ($user as $key): ?>
					<tbody>
						<tr class="text-center">
							<td><?php echo $no++ ?></td>
							<td><?php echo $key->name ?></td>
							<td><?php echo $key->email ?></td>
							<td><?php echo date('d F Y', $key->date_created); ?></td>
							<td>
								<a href="<?php echo base_url('admin/detail') ?>/<?php echo $key->user_id ?>" class="btn btn-sm btn-primary"><i class="icon mdi mdi-eye"></i> Detail</a>
								<a href="<?php echo base_url('admin/update') ?>/<?php echo $key->user_id ?>" class="btn btn-sm btn-info"><i class="icon mdi mdi-square-edit-outline"></i> Edit</a>
								<a onclick="return confirm('Yakin Mau dihapus?')" href="<?php echo base_url('admin/delete') ?>/<?php echo $key->user_id ?>" class="btn btn-sm btn-danger"><i class="icon mdi mdi-trash-can"></i> Hapus</a>
							</td>
						</tr>
					</tbody>
					<?php 
				endforeach; ?>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="addadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<form method="post" action="<?php echo base_url('admin/add') ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Tambah Admin Baru
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Nama Admin</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nama Admin" value="<?php set_value('name') ?>" required autofocus>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email Admin</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email Admin" value="<?php set_value('email') ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="password1" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="password2" class="col-sm-2 col-form-label">Confirm password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="phone" class="col-sm-2 col-form-label">Telp. Admin</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Nama Admin" value="<?php set_value('phone') ?>" required>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label">Alamat Admin</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="exampleTextarea" rows="3" name="address" placeholder="Alamat Admin" required></textarea>
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
