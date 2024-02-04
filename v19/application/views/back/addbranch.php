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
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
    " class="form-horizontal" action="<?=base_url()?>index.php/back/insertbranch" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">

<h5 align="center">Add branch</h5>
<br/>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="name" autofocus >Branch name (place)</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input id="name" name="name" placeholder="Branch place name" class="form-control input-md" required="" type="text" autofocus="autofocus" />
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="phone" autofocus >Phone</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input id="phone" name="phone" placeholder="Phone number" class="form-control input-md" required="" type="number" autofocus="autofocus" />
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="email" autofocus >Email</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input id="email" name="email" placeholder="Enter email" class="form-control input-md" required="" type="email" autofocus="autofocus" />
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="map">Map</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">                     
    <textarea type="url" class="form-control input-md" id="map" name="map" placeholder="Map view link" required="required"></textarea>
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="pin" autofocus >Droped pin</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input id="pin" name="pin" placeholder="Droped pin link" class="form-control input-md" required="" type="url" autofocus="autofocus" />
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="submit">submit</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="submit" id="submit" class="btn btn-primary">Save</button>
<!--     <button type="reset" class="btn btn-warning">reset</button> -->
  </div>
</div>

</form>
<br/>
<p align="right" class="mb-0"><a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url();?>index.php/back/branches" class="btn btn-primary">back / branches</a></p>

</div>

</body>
</html>