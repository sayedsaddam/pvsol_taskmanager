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

  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark info-color">
      <div class="container">
        <a href="" class="navbar-brand">Saddam</a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 4</a>
            </li>

          </ul>
          <!-- Links -->

        </div>
        <!-- Collapsible content -->

      </div>

    </nav>
    <!--/.Navbar-->