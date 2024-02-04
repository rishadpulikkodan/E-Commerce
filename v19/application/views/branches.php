<html>
<head>
<title>Showrooms | Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="Ecommerce">
<meta name="author" content="Ecommerce">
<meta name="keywords" content="Ecommerce, Ecommerce">
<meta property="og:title" content="Showrooms | Ecommerce" />
<meta property="og:description" content="Ecommerce">
<meta property="og:image" itemprop="image" content="<?=base_url()?>res/img/link">
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<style>
.row{
  margin:20px 20px;
  border: 0.5px solid #80808080;
  border-radius: 15px;
  box-shadow: 0px 0px 10px -5px black;
  transition:0.5s;
}
</style>
</head>
<body style="overflow-y:auto !important;" onload="srcblock();offprogress();">
<?php $data['ur'] = "branches"; $this->load->view('nav',$data); ?>
<div class="container" style="text-align: justify;">
  <br/>
  <?php if($rows) { foreach ($rows as $r) { ?>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="height:450px;">
      <h3 align="center" style="font-size:30px;"><?=$r->name?></h3>
      <p><i style='font-size:24px' class='fas'>&#xf879;</i> Phone : <a target="_blank" href="tel:<?=$r->phone?>"><?=$r->phone?></a></p>
      <p><i style='font-size:24px' class='fas'>&#xf01c;</i> Email : <a target="_blank" href="mailto:<?=$r->email?>"><?=$r->email?></a></p>
      <p>Droped pin : <a target="_blank" href="<?=$r->pin?>"><i title="Locate" class='fas'>&#xf3c5;</i></a></p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <iframe src="<?=$r->map?>" width="100%" height="450" frameborder="0" style="border:0;border-radius:20px;padding:10px;" allowfullscreen="" aria-hidden="false" tabindex="0">
      </iframe>
    </div>
  </div>
  <?php } } else { ?>
    <div class="row">
      <div class="col">
        <p align="center">0 results</p>
      </div>
    </div>
  <?php } ?>
  <br/><br/>
</div>
<?php $this->load->view('foot'); ?>
</body>
</html>