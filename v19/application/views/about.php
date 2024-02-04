<!DOCTYPE html>
<html>
<head>
  <title>About Us - Ecommerce</title>
  <meta name="theme-color" content="blue">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="About Us - Ecommerce">
  <meta property="og:title" content="About Us - Ecommerce" />
  <meta property="og:description" content="About Us - Ecommerce">
  <meta property="og:image" content="<?=base_url()?>res/img/link" />
  <link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
  <script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
</head>
<body onload="srcblock();offprogress();">
<?php $data['ur'] = 'about'; $this->load->view('nav',$data); ?>
<div class="container">
         <p class="text-primary">
          <br/>
            <?=$about?>
         </p>
  <div class="row" style="  margin:20px 20px;
  border: 0.5px solid #80808080;
  border-radius: 15px;
  box-shadow: 0px 0px 10px -5px black;
  transition:0.5s;">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="height:450px;">
      <h3 align="center" style="font-size:30px;">Ab</h3>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62529.63047433223!2d76.08581545000001!3d11.616084550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba6733459fb33d7%3A0xa5b953217a9fc043!2sKalpetta%2C%20Kerala!5e0!3m2!1sen!2sin!4v1604762861728!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
  </div>
</div>
<?php $this->load->view('foot'); ?>
</body>
</html>