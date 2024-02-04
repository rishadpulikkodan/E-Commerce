<html>
<head>
<title>My profile - Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="Ecommerce">
<meta name="author" content="Ecommerce">
<meta name="keywords" content="Ecommerce, Ecommerce">
<meta property="og:title" content="My profile | Ecommerce" />
<meta property="og:description" content="Ecommerce">
<meta property="og:image" itemprop="image" content="<?=base_url()?>res/img/link">
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  .btn{
    border-radius:100px;
  }
  .ricon{
    font-size: 18px;
    vertical-align: middle;
  }
  td{
    vertical-align:middle !important;
  }
</style>
</head>
<body style="overflow-y:auto !important;" onload="srcblock();offprogress();">
<?php $data['ur'] = 'profile'; $this->load->view('nav',$data); ?>
<div class="container">
  <br/>
  <div class="row">
    <div class="col">

<h5 align="center">My profile</h5>
<form onsubmit="
    document.getElementById('rainbow-progress-bar').style.display='block';
    this.style.transition = '5s';
    this.style.opacity = '50%';
    this.style.filter = 'blur(3px)';
    " class="form-horizontal" action="<?= base_url()?>profile/submit" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">

<br/>
<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="name" autofocus >Name</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input disabled id="name" name="name" placeholder="Name" class="form-control input-md" required="" type="text" autofocus="autofocus" />
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 control-label col-form-label" for="phone">Phone</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input disabled id="phone" name="phone" placeholder="Phone" class="form-control input-md" required="" type="number">
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 control-label col-form-label" for="place">Place</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input disabled id="place" name="place" placeholder="Place" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="address">Address</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">                     
    <textarea disabled class="form-control input-md" id="address" name="address" placeholder="Address"  required=""></textarea>
  </div>
</div>

<div class="form-group row" id="submitd" style="display:none;height:75px;">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="submit">Submit</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="submit" id="submit" name="submit" class="btn btn-primary">Save</button>
  </div>
</div>

<div class="form-group row" id="editd">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="submit">Edit</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="button" class="btn btn-primary"
    		onclick="
    		document.getElementById('name').disabled = false;
    		document.getElementById('phone').disabled = false;
    		document.getElementById('place').disabled = false;
    		document.getElementById('address').disabled = false;
    		document.getElementById('submitd').style.display = 'block';
    		document.getElementById('editd').style.display = 'none';
    		">Edit</button>
  </div>
</div>

</form>

    </div>
  </div>
  <br/>
</div>
<?php $this->load->view('foot'); ?>
</body>
</html>