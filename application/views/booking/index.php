<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-md-8">
							<h4 class="page-title m-0"><?php echo $page ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<?= $this->session->flashdata('message'); ?>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table class="table table-striped mb-0">
										<thead>
											<tr class="text-center">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Waktu</th>
												<th>Services</th>
												<th>Customer</th>
												<th>Mobil</th>
												<th>No. Plat</th>
												<th>Action</th>
											</tr>
										</thead>

										<?php $no=1;
										foreach ($booking as $key): ?>
											<tbody>
												<tr class="text-center">
													<td><?php echo $no++ ?></td>
													<td><?php echo date('d F Y',($key->jadwal)) ?></td>
													<td><?php echo date('H:i',($key->jadwal)) ?> WIB</td>
													<td><span <?php if ($key->service=='berkala') {
														echo 'class="badge badge-primary"';
													} else {
														echo 'class="badge badge-info"';
													} ?>><?php echo $key->service ?></span></td>
													<td><?php echo $key->name ?></td>
													<td><?php echo $key->nama_brand.' '.$key->nama_brand_type ?></td>
													<td><?php echo $key->nopol ?></td>
													<td>
														<a href="<?php echo base_url('booking/detail') ?>/<?php echo $key->id_booking ?>" class="btn btn-sm btn-dark"><i class="ti-eye"></i> Detail</a>
														<?php if ($this->session->userdata('role_id')==1): ?>
															<a href="<?php echo base_url('booking/update') ?>/<?php echo $key->id_booking ?>" class="btn btn-sm btn-info"><i class="ti-pencil"></i> Edit</a>
															<a onclick="return confirm('Yakin Mau dihapus?')" href="<?php echo base_url('booking/delete') ?>/<?php echo $key->id_booking ?>" class="btn btn-sm btn-danger"><i class="ti-trash"></i> Hapus</a>
														<?php endif ?>


													</td>
												</tr>
											</tbody>
											<?php 
										endforeach; ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>
