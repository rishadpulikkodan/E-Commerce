<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<script type="text/javascript">
  $('#ld').load('<?=base_url()?>index.php/back/catogerys').fadeIn("slow");
</script>
<div id="rainbow-progress-bar"></div>
<div class="container">
<br/>
<form onsubmit="
    document.getElementById('rainbow-progress-bar').style.display='block';
    this.style.transition = '5s';
    this.style.opacity = '50%';
    this.style.filter = 'blur(3px)';
    " class="form-horizontal" action="<?=base_url()?>index.php/back/addtocatogery" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 5px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">

<h5 align="center">Create new catogery</h5>
<br/>
<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="name">Catogery name</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input id="name" name="name" placeholder="Catogery name" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="submit">submit</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button type="submit" id="submit" class="btn btn-primary" style="float:right;">Save</button>
<!--     <button type="reset" class="btn btn-warning">reset</button> -->
  </div>
</div>

<?php if (isset($msg)) { ?>
  <p align="center" style="color:red;"><?=$msg?></p>
<?php } ?>

</form>

<div class="row">
  <div class="col">
    <br><br>
    <h5 align="center">Created catogerys</h5>
    <br>
    <div onloadeddata="$.ajax('<?=base_url()?>index.php/back/catogerys').then(function(response){
        this.innerHTML = response;
      }).fail(function(err){alert('Server failed error');})" id="ld" class="list-group" 
      onload="$.ajax('<?=base_url()?>index.php/back/catogerys').then(function(response){
        this.innerHTML = response;
      }).fail(function(err){alert('Server failed error');})" 
       >
       <?php
    if($rows) {
        foreach ($rows as $r) { ?>

      <div class="list-group-item list-group-item-action" style="height:65px;">
          <button style="
            outline: none;
            border: none;
            background: none;
            height: 100%;
          ">
            <text><?=$r->name?> </text>
            <span class="badge badge-primary badge-pill">0</span>
          </button>
          <p style="float:right;margin-bottom: auto;"> &nbsp;
            <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url()?>index.php/back/editcatogeryview/<?=$r->id?>" class="btn btn-warning">edit</a>
            <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url()?>index.php/back/dlcataler/<?=$r->id?>/<?=$r->name?>" class="btn btn-danger">delete</a>
          </p>
      </div>

      <?php } } else { echo"<p align='center'>0 results</p>"; } 
       ?>
    </div>

  </div>
</div>
<br/>
</div>
<script type="text/javascript">
  
</script>
</body>
</html>