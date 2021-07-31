<?php
/* Filename: admin_login.php
*  Location: views/admin_login.php
*  Author: Saddam
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login | Progressive Ventures</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<meta name="og:card" content="" />
		<meta name="og:description" content="" />
		<meta name="og:title" content="" />
		<meta name="og:image" content="" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
		<!-- Material Design Bootstrap -->
		<link href="<?= base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	</head>
	<body>
		<div class="container">
			<div class="row mt-5 pt-5">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center">
							<h3 class="card-title display-4 font-weight-bold mb-0">Portal Login</h3>
							<small class="mt-0">Enter your credentials (Username & Password) to continue!</small>
						</div>
						<div class="card-body mt-3">
							<?php if($otp_sent = $this->session->flashdata('otp_sent')): ?>
								<div class="row">
									<div class="col-2"></div>
									<div class="col-8 text-center">
										<div class="alert alert-info"><?= $otp_sent; ?></div>
									</div>
									<div class="col-2"></div>
								</div>
							<?php endif; ?>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-8">
									<form action="<?= base_url('login/admin_login'); ?>" method="post">
										<div class="md-form mb-5">
											<i class="fas fa-user prefix grey-text"></i>
											<input type="text" name="username" class="form-control rounded" required>
											<label for="username">Username</label>
										</div>
										<div class="md-form mb-5">
											<i class="fas fa-lock prefix grey-text"></i>
											<input type="password" name="password" class="form-control md-form rounded" required>
											<label for="password">Password</label>
										</div>
										<!-- <div class="md-form">
											<input type="password" name="otp" class="form-control md-form rounded" required maxlength="6">
											<label for="otp">Enter the 6 digit code</label>
										</div> -->
										<div class="md-form">
											<button type="submit" class="btn btn-outline-dark rounded-pill btn-block">Login</button>
											Don't have an account ? <a data-toggle="modal" class="text-info" data-target="#modalRegisterForm">Register</a>
										</div>
									</form>
								</div>
								<div class="col-2"></div>
							</div>
							<?php if($login_error = $this->session->flashdata('login_error')): ?>
								<div class="row">
									<div class="col-12">
										<div class="alert alert-danger text-center"><?= $login_error; ?></div>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="card-footer text-center">
							<small class="text-dark font-weight-lighter">Copyright &copy; Progressive Ventures (Pvt.) Ltd. <?= date('Y'); ?></small>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<!-- Signup modal -->
		<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<input type="text" id="orangeForm-name" class="form-control validate">
						<label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
					</div>
					<div class="md-form mb-5">
						<select name="user_role" class="browser-defaul custom-select">
							<option value="" disabled selected>--select your role--</option>
							<option value="admin">Admin</option>
							<option value="staff">Staff</option>
						</select>
					</div>
					<div class="md-form mb-4">
						<input type="password" id="orangeForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-center">
					<button class="btn btn-deep-orange">Sign up</button>
				</div>
				</div>
			</div>
		</div>
		<!-- / Signup modal -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>
	</body>
</html>