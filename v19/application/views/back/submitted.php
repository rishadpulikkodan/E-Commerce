<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
        <h1></h1>
    <div class="alert alert-success" role="alert">
        <div>
            <img width="100px" src="<?=base_url().'res/images/'.$name.$id?>.png" />
            <?=$name?> successfully added to stock !
        </div>
        <br/>
        <div class="alert alert-success" role="alert">
            <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-primary" href="<?=base_url().'index.php/back/addstock'?>">Add more</a>
            <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-primary" href="<?=base_url().'index.php/back/stocks'?>">View products</a>
        </div>
    </div>
</div>

  </body>
</html>