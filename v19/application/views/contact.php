<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Ecommerce</title>
  <meta name="theme-color" content="blue">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="Contact Us - Ecommerce">
  <meta property="og:title" content="Contact Us - Ecommerce" />
  <meta property="og:description" content="Contact Us - Ecommerce">
  <meta property="og:image" content="<?=base_url()?>res/img/link" />
  <link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
  <script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
</head>
<body onload="srcblock();offprogress();">
<?php $data['ur'] = 'contact'; $this->load->view('nav',$data); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-6" style="margin:auto;">
      <br/><br/><br/>
      <h3 align="center" style="font-size:30px;">Get in Touch</h3>
            <div style="margin:auto;" class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-6">
                    
<form style="padding-top:50px;padding-bottom:50px;" 
      onsubmit="
          document.getElementById('rainbow-progress-bar').style.display='block';" 
      action="<?=base_url()?>home/messagesubmitt/c" 
      method="POST" 
      enctype='multipart/form-data'>
  <div class="form-group">
    <input class="form-control" type="text" name="name" maxlength="70" placeholder="Name" required="">
  </div>
  <div class="form-group">
    <input class="form-control" type="email" name="email" placeholder="E-mail" maxlength="70">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" name="subject" placeholder="Subject" maxlength="70">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" placeholder="Message" rows="5" maxlength="500" required="" style="margin-top: 0px; margin-bottom: 0px; height: 185px;"></textarea>
  </div>
  <div class="form-group">
    <button style="width:100%;" type="submit" class="btn btn-warning">Send message</button>
  </div>
  <p align="center" style="color:green;"><?php if(isset($msg)){ echo $msg; } ?></p>
</form>

            </div>
    </div>
  </div>
</div>
<?php $this->load->view('foot'); ?>
</body>
</html>