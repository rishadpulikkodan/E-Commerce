<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>res/js/jquery.min.js"></script>
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
    this.style.filter = 'blur(3px)';" class="form-horizontal" action="<?= base_url()?>index.php/back/edit/<?=$id?>/<?=$row->name;?>" method="POST" enctype='multipart/form-data' style="
    opacity: 100%;
    filter: blur(0px);
    transition:5s;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px #80808040;
">

<h5 align="center">Edit product</h5>
<br/>
<div style="
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;">
  <img style="height: 150px;
    border: 3px solid gray;
    border-radius: 22px;" src="<?=base_url()."res/images/".$row->name.$row->id.".png";?>" />
  <?php
    if($rowsg){
      foreach ($rowsg as $r) {
        ?>
          <img height="100px" src="<?=base_url()."/res/gallery/".$r->name;?>" />
        <?php
      }
    }
  ?>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="name">Product name</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input value="<?=$row->name;?>" id="name" name="name" placeholder="Product name" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 control-label col-form-label" for="price">Price</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <input value="<?=$row->price;?>" id="price" name="price" placeholder="Price" class="form-control input-md" required="" type="number">
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="description">Description</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">                     
    <textarea value="" class="form-control input-md" id="description" name="info" placeholder="description"><?=$row->info;?></textarea>
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="categorie">Catogery</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <select id="categorie" name="type" class="form-control input-md">
      <option value="<?=$row->id?>"><?=$row->type?></option>
      <?php
      if ($rowsc) {
        foreach ($rowsc as $r) {
          echo "<option>".$r->name."</option>";
        }
      }
      ?>
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 control-label col-form-label" for="submit">submit</label>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
    <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-primary" href="<?=base_url();?>index.php/back/stocks">Cancel</a>
<!--     <button type="reset" class="btn btn-warning">reset</button> -->
  </div>
</div>

</form>

</div>

</body>
</html>


