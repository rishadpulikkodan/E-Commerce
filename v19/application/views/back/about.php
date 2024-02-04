<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
  <style type="text/css">
  @media (min-width: 800px){
    .control-label{
      text-align:right;
    }
  }
  .btn{
      border-radius:100px;
      color:white !important;
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
<div class="row">
  <div class="col">

<br/>
  <form onsubmit="
      document.getElementById('rainbow-progress-bar').style.display='block';
      this.style.transition = '5s';
      this.style.opacity = '50%';
      this.style.filter = 'blur(3px)';
      " class="form-horizontal" action="<?= base_url()?>index.php/back/aboutedit/" method="POST" enctype='multipart/form-data' style="
      opacity: 100%;
      filter: blur(0px);
      transition:5s;
      padding: 10px;
      border-radius: 20px;
      box-shadow: 0px 0px 10px #80808040;
  ">

  <h5 align="center">Change About us text</h5>
  <br/>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="about">About</label>
  <div onclick="edit();" class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">                     
    <textarea rows="10" disabled class="form-control input-md" id="about" name="about" placeholder="About Us"  required=""><?=$row->about;?></textarea>
  </div>
</div>

<div class="form-group row" id="submitd" style="display:none;height:75px;">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="submit" id="submit" name="submit" class="btn btn-primary">Save</button>
  </div>
</div>

<div class="form-group row" id="editd">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button style="float:right;" type="button" class="btn btn-primary"
        onclick="edit();">Edit</button>
  </div>
</div>

<?php if (!empty($msg)) { ?>
    <p style='color:green;' align='center'><?=$msg?></p>
<?php } ?>

</form>

<br/><br/>

<p align="right" class="mb-0"><a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url();?>index.php/back/dashboard" class="btn btn-primary">Cncel / dashboard</a></p>

  </div>
</div>
<br/>
</div>
<script type="text/javascript">
  function edit(){
        document.getElementById('about').disabled = false;
        document.getElementById('submitd').style.display = 'block';
        document.getElementById('editd').style.display = 'none';
  }
</script>
</body>
</html>


