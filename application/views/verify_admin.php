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
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	</head>
	<body>
		<div class="container">
			<div class="row mt-5 pt-5">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center">
							<h3 class="card-title display-4 font-weight-bold mb-0">Admin Verification</h3>
							<small class="mt-0">Enter your email to get an OTP for logging in!</small>
						</div>
						<div class="card-body mt-5">
							<div class="row">
								<div class="col-2"></div>
								<div class="col-8">
									<form action="<?= base_url('login/email_otp'); ?>" method="post">
										<div class="md-form">
											<input type="email" name="email" class="form-control rounded" required>
											<label for="email">Enter your email</label>
										</div>
                                        <div class="md-form">
											<button type="submit" class="btn btn-outline-dark rounded-pill btn-block">Continue</button>
										</div>
									</form>
								</div>
								<div class="col-2"></div>
							</div>
							<?php if($not_found = $this->session->flashdata('not_found')): ?>
								<div class="row">
                                    <div class="col-2"></div>
									<div class="col-8">
										<div class="alert alert-danger text-center"><?= $not_found; ?></div>
									</div>
                                    <div class="col-2"></div>
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
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>
	</body>
</html>