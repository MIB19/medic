<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>RS Delta Surya</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
    <link href="<?php echo $config->base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $config->base_url();?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  </head>
  <body style="background-color: paleturquoise;">
  <a href="<?php echo $config->base_url();?>"><button class="text-weight-bold btn btn-primary">Kembali</button></a>
  <!-- <nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#pablo">Info Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="example-navbar-info">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#pablo">
              <p>Discover</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  	<div id="indiks" class="container-fluid" style="width: 100%;">
		<?php require 'views/'.$halaman.'.php';?>
	</div>

  <script src="<?php echo $config->base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/bootstrap-switch.js"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo $config->base_url();?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  </body>
</html>
