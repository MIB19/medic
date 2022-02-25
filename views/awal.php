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
  
    <div class="container text-center" style="margin-top:40px">
    <h2 class="font-weight-bold text-info">Selamat Datang di RS. Delta Surya</h2>
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo $config->base_url();?>ecard.html"><div class="card" style=" border-radius: 30px; background-color: white;padding: 30px; color: black;">
                    <img class="card-img-top" src="<?php echo $config->base_url();?>icon/ecard.jpg" style="height: 350px;" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="font-weight-bold text-info">Layanan E-Card</h3>
                    </div>
                </div></a>
            </div>
            <div class="col-md-6">
                <a href="<?php echo $config->base_url();?>jadwal.html"><div class="card" style="border-radius: 30px; background-color: white;padding: 30px; color: black;">
                    <img class="card-img-top" src="<?php echo $config->base_url();?>icon/jdwl.jpg" style="height: 350px;" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="font-weight-bold text-info">Jadwal Dokter</h3>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

  <script src="<?php echo $config->base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/bootstrap-switch.js"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php echo $config->base_url();?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  
  <script src="<?php echo $config->base_url();?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  </body>
</html>