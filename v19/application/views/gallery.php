<html>
<head>
<title>Gallery - Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="Ecommerce">
<meta name="author" content="Ecommerce">
<meta name="keywords" content="Ecommerce, Ecommerce">
<meta property="og:title" content="Gallery - Ecommerce" />
<meta property="og:description" content="Gallery - Ecommerce">
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<meta property="og:image" itemprop="image" content="<?=base_url()?>res/img/link">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<style>
  .img{
    width:100%;
    height:30vh;
  }
</style>
</head>
<body style="overflow-y:auto !important;" onload="srcblock();offprogress();">
<?php $data['ur'] = 'gallery'; $this->load->view('nav',$data); ?>
<div class="container" style="text-align: justify;">
  <br/>
  <div class="row" style="transition:0.5s;">
<?php if($rows) { foreach ($rows as $r) { ?>
    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" style="transition:0.5s;">
      <div class="img" style="
                  background: url(<?=base_url()?>res/posts/<?=$r->filename?>);
                  background-repeat: no-repeat;
                  background-size: contain;
                  background-position: center center;
                  transition:0.5s;
      ">
      </div>
    </div>
<?php } } else{ ?>
<p align="center" style="width:100%;">0 results</p>
<?php } ?>
  </div>
  <br/><br/>
</div>
<?php $this->load->view('foot'); ?>
</body>
</html>