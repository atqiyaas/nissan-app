<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="<?php echo base_url() ?>assets/js/app.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
	<title><?php echo $title ?></title>
</head>
<body>
	<div class="top-bar-box pl-0">
		<div class="container">
			<div class="top-bar">
				<a class="logo-box" href="javascript:;">
					<img class="logo" src="<?php echo base_url() ?>assets/images/logo-light.png" alt="Generic placeholder image">
					<div class="title"><?php echo $title ?></div>
				</a>
				<div class="page-info text-uppercase">Booking Reservation</div>

				<div class="mobile-nav-toggle"> <i class="icon mdi mdi-menu" aria-hidden="true"></i> Menu </div>
				<div class="user-profile">
					<img class="user-image" src="<?php echo base_url() ?>assets/images/profile-1.jpg" alt="Generic placeholder image">
					<div class="info">
						<div class="user-name"><?php echo $this->session->userdata('name'); ?></div>
						<div class="user-info">
							<?php $session = $this->session->userdata('role_id');
							if ($session==1) {
								echo 'Administrator';
							} else {
								echo 'Customer';
							} ?>
						</div>
					</div>
					<div class="user-profile-content">
						<a href="javascript:;"> <i class="icon mdi mdi-settings" aria-hidden="true"></i> Settings </a>
						<a href="javascript:;"> <i class="icon mdi mdi-textbox-password" aria-hidden="true"></i> Change Password </a>
						<a href="<?php echo base_url('auth/logout') ?>"> <i class="icon mdi mdi-logout-variant" aria-hidden="true"></i> Logout </a>
					</div>
				</div>
			</div>
			<?php if ($this->session->userdata('role_id')==1) {
				$this->load->view('inc/nav_admin', TRUE);
			} else {
				$this->load->view('inc/nav_user', TRUE);
			} ?>
		</div>
	</div>
	<div class="content-wrapper ml-0 mt-100 mt-lg-105">
		<div class="container">
			<div class="box-layout">
				<div class="main-layout full-width">
					<!-- <div class="text-size-19 font-weight-normal mt-20">Welcome back Gladwyn!</div> -->
					<!-- <div>Here's your current social media reports <strong>Sunday, 02 June 2019</strong></div> -->
					<div class="row sm-gutter my-30">
						<?php echo $contents; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>