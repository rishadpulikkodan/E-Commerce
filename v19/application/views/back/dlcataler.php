<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>res/js/jquery.min.js"></script>
  <style type="text/css">
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
  <div class="row">
    <div class="col">
      <br>

<!--       <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Delete catogery only !</h4>
        <p>This will delete only catogery only </p>
        <p>delete without product</p>
        <p>it will exist products</p>
        <hr>
        <p align="right" class="mb-0"><button class="btn btn-success">Delete catogery only</button></p>
      </div> -->

      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Delete catogery !</h4>
        <p><?=$name?></p>
        <hr>
        <p align="right" class="mb-0"><a href="<?=base_url();?>index.php/back/dltcat/<?=$id?>/<?=$name?>" class="btn btn-danger">Delete</a></p>
      </div>
      <p align="right" class="mb-0"><a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" href="<?=base_url();?>index.php/back/addcatogery" class="btn btn-primary">Cncel / back</a></p>
    </div>
  </div>
</div>

</body>
</html>


