<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
        body{
          user-select:none;
          touch-action:manipulation;
        }
        .myc{ padding-top: 30px; margin:auto; }
        .card {
            text-align:center;
            border-radius: 20px;
        }
        .card:hover{
          transition:0.5s;
          background:#add8e680;
        }
        .myct {
            font-weight: 100;
            font-size: 60px;
        }
        .fav {
            height:150px;
        }
        .card-footer{ border-radius: 0px 0px 20px 20px !important; }
    </style>
  </head>
  <body>
<script type="text/javascript">
  var auto_refresh = setInterval(
    function ()
    {
      $('#or').load('<?= base_url()?>index.php/back/analyz/or').fadeIn("slow");
      $('#ms').load('<?= base_url()?>index.php/back/analyz/ms').fadeIn("slow");
      $('.tt').load('<?= base_url()?>index.php/back/analyz/tt').fadeIn("slow");
      $('#pr').load('<?= base_url()?>index.php/back/analyz/pr').fadeIn("slow");
      $('#ur').load('<?= base_url()?>index.php/back/analyz/ur').fadeIn("slow");

      $('#wb').load('<?= base_url()?>index.php/back/analyz/wb').fadeIn("slow");
      $('#ig').load('<?= base_url()?>index.php/back/analyz/ig').fadeIn("slow");
      $('#fb').load('<?= base_url()?>index.php/back/analyz/fb').fadeIn("slow");
      $('#gm').load('<?= base_url()?>index.php/back/analyz/gm').fadeIn("slow");
      $('#wa').load('<?= base_url()?>index.php/back/analyz/wa').fadeIn("slow");

      $('#pc').load('<?= base_url()?>index.php/back/analyz/pc').fadeIn("slow");
      $('#mb').load('<?= base_url()?>index.php/back/analyz/mb').fadeIn("slow");
      $('#tb').load('<?= base_url()?>index.php/back/analyz/tb').fadeIn("slow");
    },500);
</script>
    <br>
    <br>
    <div class="container">
    <h5 style="font-size: 25px;
    font-weight: 100;
    text-align: center;">Dashboard</h5>

        <div class="row row-cols-1 row-cols-md-3">
          <div class="myc col-6 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
            <div class="card fav">
              <div class="card-body">
                <h1 class="card-title myct" id="or">0</h1>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">Orders</div>
            </div>
          </div>
          <div class="myc col-6 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
            <div class="card fav">
              <div class="card-body">
                <h5 class="card-title myct" id="ms">0</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">Messages</div>
            </div>
          </div>
          <div class="myc col-6 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
            <div class="card fav">
              <div class="card-body">
                <h5 class="card-title myct tt">0</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">Views</div>
            </div>
          </div>
          <div class="myc col-6 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
            <div class="card fav">
              <div class="card-body">
                <h5 class="card-title myct" id="pr">0</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">Products</div>
            </div>
          </div>
          <div class="myc col-6 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
            <div class="card fav">
              <div class="card-body">
                <h5 class="card-title myct" id="ur">0</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">Users</div>
            </div>
          </div>
        </div>

    <br>
    <br>
    <h5 style="font-size: 25px;
    font-weight: 100;
    text-align: center;">Views</h5>

<style type="text/css">
    .sev{
        transition:0.5s;
        height: 190px;
    }
    .sev:hover{
        transition:0.5s;
        color:blue !important;
    }
    .soct {
        font-size: 50px;
    }
    .soc{
        font-size: 25px;
    }
</style>
        <div class="row row-cols-1 row-cols-md-6">
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct tt">0</h5>
                <p class="card-text soc"><span class="glyphicon">&#xe135;</span></p>
              </div>
              <div class="card-footer">Total</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct" id="wb">0</h5>
                <p class="card-text soc"><span class="glyphicon">&#xe135;</span></p>
              </div>
              <div class="card-footer">Web</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct" id="ig">0</h5>
                <p class="card-text soc"><i class='fab'>&#xf16d;</i></p>
              </div>
              <div class="card-footer">Instagram</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct" id="fb">0</h5>
                <p class="card-text soc"><i class='fab'>&#xf082;</i></p>
              </div>
              <div class="card-footer">FaceBook</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct" id="gm">0</h5>
                <p class="card-text soc"><span class="glyphicon">&#xe062;</span></p>
              </div>
              <div class="card-footer">G Maps</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <div class="card sev">
              <div class="card-body">
                <h5 class="card-title soct" id="wa">0</h5>
                <p class="card-text soc"><i class='fab'>&#xf232;</i></p>
              </div>
              <div class="card-footer">WhatsApp</div>
            </div>
          </div>
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-5">
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card sev">
              <div class="card-header bg-transparent">Desktop</div>
              <div class="card-body">
                <h5 class="card-title soct" id="pc">0</h5>
                <p class="card-text soc"><i class='fas'>&#xf108;</i></p>
              </div>
              <div class="card-footer">PC</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card sev">
              <div class="card-header bg-transparent">Mobile</div>
              <div class="card-body">
                <h5 class="card-title soct" id="mb">0</h5>
                <p class="card-text soc"><i class='fas'>&#xf3cd;</i></p>
              </div>
              <div class="card-footer">Smartphone</div>
            </div>
          </div>
          <div class="myc col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card sev">
              <div class="card-header bg-transparent">Other</div>
              <div class="card-body">
                <h5 class="card-title soct" id="tb">0</h5>
                <p class="card-text soc"><i class='fas'>&#xf3fa;</i></p>
              </div>
              <div class="card-footer">Tab</div>
            </div>
          </div>
        </div>

        <br>

    </div>





<!--     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  </body>
</html>