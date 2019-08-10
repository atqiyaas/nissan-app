<div class="wrapper-page">
	<div class="row justify-content-center">
		<div class="col-md-6 col-12 col-sm-8 mt-5">

			<div class="card">
				<div class="card-header bg-primary">
					<h3 class="card-title m-0 text-center">Silahkan pilih Jenis Service ?</h3>
				</div>
				<div class="card-body bg-dark">
					 <?= $this->session->flashdata('message'); ?>
					<div class="row">
						<div class="col-lg-6 col-md-6 m-t-30 m-b-15">
							<div class="text-center">
								<!-- Custom width modal -->
								<button type="button" class="btn btn-block btn-primary waves-effect waves-light" data-toggle="modal" data-target="#Keluhan">Service Keluhan</button>
							</div>
							<!-- sample modal content -->
							<div id="Keluhan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<form method="post" action="<?php echo base_url('user/booking_keluhan') ?>">
											<div class="modal-header">
												<h4 class="modal-title m-0" id="custom-width-modalLabel">Jenis Service: Keluhan</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>
											<div class="modal-body">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="brand">Brand Car</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car"></i></span>
															</div>
															<select id="brand2" name="brand2" class="form-control">
																<option>Select Your brand</option>
																<?php foreach ($mobil as $key): ?>
																	<option value="<?php echo $key->nama_brand ?>"><?php echo $key->nama_brand ?></option>
																<?php endforeach; ?>
															</select>
														</div>
														
													</div>
													<div class="form-group col-md-6">
														<label for="type2">Type of Brand Car</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car-multiple"></i></span>
															</div>
															<select id="type2" name="type2" class="form-control">
																<option>Select Brand Type</option>
																<?php foreach ($join as $key): ?>
																	<option class="<?php echo $key->nama_brand ?>" value="<?php echo $key->id_brand_type ?>"><?php echo $key->nama_brand_type ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>

													<div class="form-group col-md-4">
														<label for="date">Date Schedule</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-calendar"></i></span>
															</div>
															<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="date">
														</div>
													</div>

													<div class="form-group col-md-4">
														<label for="nopol">Time Service</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-clock-outline"></i></span>
															</div>
															<select name="time" class="form-control">
																<option value="">Pilih Jam Service</option>
																<option value="08:00">08:00</option>
																<option value="09:00">09:00</option>
																<option value="10:00">10:00</option>
																<option value="11:00">11:00</option>
																<option value="12:00">12:00</option>
																<option value="13:00">13:00</option>
																<option value="14:00">14:00</option>
															</select>
														</div>

													</div>

													<div class="form-group col-md-4">
														<label for="nopol">No. Kendaraan</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car"></i></span>
															</div>
															<input type="text" class="form-control" placeholder="Nomor Kendaraan" name="nopol">
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="mdi mdi-cancel"></i> Cancel</button>
												<button type="submit" name="submit" value="Submit" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-bookmark-check"></i> BOOKING</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 m-t-30 m-b-15">
							<div class="text-center">
								<!-- Custom width modal -->
								<button type="button" class="btn btn-block btn-primary waves-effect waves-light" data-toggle="modal" data-target="#berkala">Service Berkala</button>
							</div>
							<!-- sample modal content -->
							<div id="berkala" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<form method="post" action="<?php echo base_url('user/booking_berkala') ?>">
											<div class="modal-header">
												<h4 class="modal-title m-0" id="custom-width-modalLabel">Jenis Service: Berkala</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>
											<div class="modal-body">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="brand">Brand Car</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car"></i></span>
															</div>
															<select id="brand" name="brand" class="form-control">
																<option>Select Your brand</option>
																<?php foreach ($mobil as $key): ?>
																	<option value="<?php echo $key->nama_brand ?>"><?php echo $key->nama_brand ?></option>
																<?php endforeach; ?>
															</select>
														</div>

													</div>
													<div class="form-group col-md-6">
														<label for="type">Type of Brand Car</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car-multiple"></i></span>
															</div>
															<select id="type" name="type" class="form-control">
																<option>Select Brand Type</option>
																<?php foreach ($join as $key): ?>
																	<option class="<?php echo $key->nama_brand ?>" value="<?php echo $key->id_brand_type ?>"><?php echo $key->nama_brand_type ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label for="nopol">Date Schedule</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-calendar"></i></span>
															</div>
															<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="date">
														</div>
													</div>

													<div class="form-group col-md-6">
														<label for="nopol">Time Service</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-clock-outline"></i></span>
															</div>
															<select name="time" class="form-control">
																<option value="">Pilih Jam Service</option>
																<option value="08:00">08:00</option>
																<option value="09:00">09:00</option>
																<option value="10:00">10:00</option>
																<option value="11:00">11:00</option>
																<option value="12:00">12:00</option>
																<option value="13:00">13:00</option>
																<option value="14:00">14:00</option>
															</select>
														</div>

													</div>

													<div class="form-group col-md-6">
														<label for="nopol">No. Kendaraan</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-car"></i></span>
															</div>
															<input type="text" class="form-control" placeholder="Nomor Kendaraan" name="nopol">
														</div>
													</div>

													<div class="form-group col-md-6">
														<label for="km">Speedometer (km)</label>
														<div class="input-group">
															<div class="input-group-append">
																<span class="input-group-text b-0"><i class="mdi mdi-speedometer"></i></span>
															</div>
															<input type="number" min="500" class="form-control" placeholder="Speedometer" name="km">
														</div>
													</div>

												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="mdi mdi-cancel"></i> Cancel</button>
												<button type="submit" name="submit" value="Submit" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-bookmark-check"></i> BOOKING</button>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
