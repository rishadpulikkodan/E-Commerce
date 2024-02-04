<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>res/js/jquery.min.js"></script>
  <style type="text/css">
  @media (min-width: 800px){
    .control-label{
      text-align:right;
    }
  }
  .btn{
    border-radius:100px;
  }
  </style>
  <style type="text/css">
    @keyframes rainbow { 
  0% { background-position: 0% 100%; }
  50% { background-position: 100% 200%; }
  100% {background-position: 0% 100%; }
}
    #rainbow-progress-bar {
      display: none;
      position: fixed;
      left:0;
      right: 0;
      top: 0;
      bottom: 0;
      width: 100%;
      background: linear-gradient(124deg, blue, lightblue, white, lightblue, blue);
      background-size: 900% 900%;
      animation: rainbow 9s ease infinite;
      height: 5px;
      z-index:6;
    }
  </style>
</head>
<body>
<div id="rainbow-progress-bar"></div>
<div class="container">
<br/>

<form onsubmit="
    document.getElementById('rainbow-progress-bar').style.display='block';
    this.style.transition = '5s';
    this.style.opacity = '50%';
    this.style.filter = 'blur(3px)';
    " class="form-horizontal" action="<?=base_url()?>index.php/back/updateevent" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">
<h5 align="center">Upload ( event/ad/offer )</h5>
<?php if($row->event != "0"){ ?>
<div class="alert alert-primary" role="alert">
    <img width="100px" src="<?=base_url();?>res/event/<?=$row->event;?>">
      Remove event
    <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-primary" href="http://localhost/ecommerce/index.php/back/remevent/<?=$row->event;?>">Remove event</a>
</div>
<?php } ?>
<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="photo">Update event</label>
  <div class="input-group col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon02">Photo</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="photo" name="photo" accept='image/png, image/jpeg' aria-describedby="photo" required="required">
      <label class="custom-file-label" for="photo">Choose photo</label>
    </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="submit" id="submit" name="submit" class="btn btn-primary">Upload</button>
<!--     <button type="reset" class="btn btn-warning">reset</button> -->
  </div>
</div>
</form>

<br/>

<form onsubmit="
    document.getElementById('rainbow-progress-bar').style.display='block';
    this.style.transition = '5s';
    this.style.opacity = '50%';
    this.style.filter = 'blur(3px)';
    " class="form-horizontal" action="<?=base_url()?>index.php/back/updatevideo" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">
<h5 align="center">Upload video</h5>
<?php if($row->video != "0"){ ?>
<div class="alert alert-primary" role="alert">
<video style="background:black;" width="100px" autoplay loop>
  <source src="<?=base_url();?>res/event/<?=$row->video?>" type="video/mp4">
  Your browser does not support HTML video.
</video>
      Remove video
    <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-primary" href="http://localhost/ecommerce/index.php/back/remvideo/<?=$row->video;?>">Remove video</a>
</div>
<?php } ?>
<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="video">Update event</label>
  <div class="input-group col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon02">Video</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="video" name="video" accept='video/*' aria-describedby="photo" required="required">
      <label class="custom-file-label" for="video">Choose video</label>
    </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="submit" id="submit" name="submit" class="btn btn-primary">Upload</button>
<!--     <button type="reset" class="btn btn-warning">reset</button> -->
  </div>
</div>
</form>

<br>
<p align="right" class="mb-0"><a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url();?>index.php/back/dashboard" class="btn btn-primary">Back / dashboard</a></p>

</div>
</body>
</html>