<!DOCTYPE html>
<html>
<head>
  <title>Ecommerce</title>
  <meta name="theme-color" content="blue">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="msapplication-TileColor" content="blue" />
  <meta name="msapplication-TileImage" content="<?=base_url()?>res/img/favicon.png" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="blue" />
  <meta name="apple-mobile-web-app-title" content="E Commerce" />
  <meta name="application-name" content="E Commerce" />
  <link rel="apple-touch-icon" href="<?=base_url()?>res/img/favicon.png" />
  <link rel="manifest" href="<?=base_url()?>res/json/manifesthome.json" />
  <meta name="description" content="Ecommerce">
  <meta property="og:title" content="Ecommerce" />
  <meta property="og:description" content="Ecommerce">
  <meta property="og:image" content="<?=base_url()?>res/img/link" />
  <link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
  <script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
</head>
<body onload="srcblock();offprogress();">
<?php $data['ur'] = 'home'; $this->load->view('nav',$data); ?>
<div class="container">

  <div style="height:25vh;"></div>
  
  <div class="row">
    <div class="col">
         <p class="text-primary">
          <br/>
            <?=$row->about?>
         </p>
    </div>
  </div>

  <div style="height:25vh;"></div>

  <div class="row">
    <div class="col">
    <?php if($row->event != "0"){ ?>
      <img src="<?=base_url();?>res/event/<?=$row->event?>" class="img-fluid" alt="event">
    <?php } ?>
    </div>
  </div>

  <div style="height:25vh;"></div>

  <div class="row">
    <div class="col">
    <?php if($rows){ ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators" style="width: -webkit-fill-available;">
    <?php $a=0; foreach ($rows as $r) {  ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?=$a;?>" class="<?php if($a == '0'){ echo "active"; } ?>"></li>
    <?php $a=$a+1; } ?>
  </ol>
  <div class="carousel-inner">
    <?php $b=0; foreach ($rows as $r) {  ?>
    <div class="carousel-item <?php if($b == '0'){ echo "active"; } ?>">
      <img class="d-block w-100" src="<?=base_url()?>res/posts/<?=$r->filename;?>" alt="<?=$r->filename;?>">
    </div>
    <?php $b=$b+1; } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <?php } ?>
    </div>
  </div>

  <div style="height:25vh;"></div>

<?php if($row->video != '0'){ ?>
<video id="vid" style="background:black;" width="100%" autoplay muted loop>
  <source src="<?=base_url();?>res/event/<?=$row->video?>" type="video/mp4">
  <source src="<?=base_url();?>res/event/<?=$row->video?>" type="video/ogg">
  Your browser does not support HTML video.
</video>
<?php } ?>
  <div class="toast__msg"></div>
</div>
<div style="height:25vh;"></div>
<?php $this->load->view('foot'); ?>
  <!-- JS Files  -->
<script src="<?=base_url()?>res/js/toast.js"></script>
<script src="<?=base_url()?>res/js/main.js"></script>
<script src="<?=base_url()?>res/js/offline.js"></script>
<script src="<?=base_url()?>res/js/sync.js"></script>
<script src="<?=base_url()?>res/js/share.js"></script>
<!-- My Google Analytics Report -->
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    (i[r] =
      i[r] ||
      function() {
        (i[r].q = i[r].q || []).push(arguments);
      }),
      (i[r].l = 1 * new Date());
    (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m);
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-92627241-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>