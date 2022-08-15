<?php 
/*
* Filename: head.php
* Filepath: views / components / head.php
* Author: Saddam
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url('assets/css/extra.css'); ?>" rel="stylesheet">
  <!-- JQuery -->
  <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
	<title><?php echo $title; ?></title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet"> -->
</head>
<body style="background-color: #eee;">
    <!--Navbar -->
    <nav class="mb-0 navbar navbar-expand-lg navbar-dark default-color">
      <a class="navbar-brand" href="<?= base_url('admin'); ?>">Progressive Ventures</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/pending_tasks'); ?>">Pending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/progress_tasks'); ?>">Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/completed_tasks'); ?>">Completed</a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Logged in as <?= ucfirst($this->session->userdata('username')); ?></a>
                    <a class="dropdown-item" href="#">Profile <i class="fa fa-user ml-5"></i></a>
                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">Logout <i class="fa fa-sign-out-alt ml-5"></i></a>
                  </div>
              </li>
          </ul>
      </div>
    </nav>
  <!--/.Navbar -->
  <div class="jumbotron jumbotron-fluid aqua-gradient text-light">
      <div class="container">
          <h1 class="font-weight-bolder display-4">Progressive Ventures</h1>
          <h4>PVSol (Pvt.) Ltd. &raquo; Solar Solutions Providers.</h4>
      </div>
  </div>