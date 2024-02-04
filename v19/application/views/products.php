<html>
<head>
<title>Products Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="Products Ecommerce">
<meta property="og:title" content="Products Ecommerce" />
<meta property="og:description" content="Products Ecommerce">
<meta property="og:image" itemprop="image" content="<?=base_url()?>res/img/link">
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/products.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
</head>
<body style="overflow-y:auto !important;" onload="products('<?=$thi?>');srcblock();offprogress();">
<?php $data['ur'] = 'products'; $this->load->view('nav',$data); ?>
<?php $user = $this->session->userdata('user');
  if($user && $user['privilege'] == array_keys(return_privilage())[1]){ ?>
<script type="text/javascript">
  var auto_refresh = setInterval(
    function ()
    {
      $.ajax('<?= base_url()?>index.php/products/analyz/ors').then(function(ors){
        if(ors==0){
          $("#ors").hide('slow');
        }else{
          $("#ors").show('slow');
          $("#ors").empty();
          $("#ors").append(ors);
        }
      });
      $.ajax('<?= base_url()?>index.php/products/analyz/cart').then(function(cart){
        if(cart==0){
          $("#cart").hide('slow');
        }else{
          $("#cart").show('slow');
          $("#cart").empty();
          $("#cart").append(cart);
        }
      });
      $.ajax("<?= base_url()?>index.php/products/analyz/fav").then(function(fav){
        if(fav==0){
          $("#fav").hide('slow');
        }else{
          $("#fav").show('slow');
          $("#fav").empty();
          $("#fav").append(fav);
        }
      });
      $.ajax("<?= base_url()?>index.php/products/analyz/tot").then(function(tot){
          $("#total").empty();
          $("#total").append(tot);
      });
      $.ajax("<?= base_url()?>index.php/products/analyz/itms").then(function(itms){
          $("#items").empty();
          $("#items").append(itms);
      });
    },500);
</script>
<?php } ?>
<?php $user = $this->session->userdata('user');
  if($user && $user['privilege'] == array_keys(return_privilage())[1]){ ?>
<div id="acc">
  <button class="accb fas" onclick="window.location.href='<?=base_url()?>index.php/products/orders'" title="orders">
    &#xf48b;<br/>
    <text id="ors" class="acct"></text>
  </button>
  <button class="accb material-icons" value="carts" onclick="products(this.value);" title="carts">
    &#xe8cc;<br/>
    <text id="cart" class="acct"></text>
  </button>
  <button class="accb material-icons" value="favs" onclick="products(this.value);" title="favorites">
    &#xe87d;<br/>
    <text id="fav" class="acct"></text>
  </button>
  <button class="accb material-icons" onclick="window.location.href='<?=base_url()?>index.php/profile'" title="profile">&#xe853;</button>
</div>
<?php } else { ?>
<div id="acc" style="
    transition:0.5s;
    position: fixed;
    white-space: nowrap;
    width: 44px;
    height: 44px;
    top: 8px;
    right: 80px;
    background-color: #80808080;
    border-radius: 100px;
    backdrop-filter: blur(5px);
    z-index: 6;
">
  <button onclick="login();" class="accb" title="login"><i class="material-icons">&#xe853;</i></button>
</div>
<?php } ?>


<div onclick="loginhd();" ontouchmove="loginhd();" id="login" style="
    width: 100%;
    height: 100vh;
    position: fixed;
    top: 0;
    z-index: 6;
    background: #00000040;
    <?php if(isset($direct)){}else{echo"display:none;";}?>
">
    <div onclick="event.cancelBubble=true;if (event.stopPropagation) event.stopPropagation();" onmouseover="event.cancelBubble=true;if (event.stopPropagation) event.stopPropagation();" ontouchmove="event.cancelBubble=true;if (event.stopPropagation) event.stopPropagation();" id="logina" style="
    transition:0.5s;
    opacity: 0%;
    transform-origin: 100% 100%;
    transform: scale(0);
    width: 90%;
    height: 75vh;
    margin: 5vh auto auto;
    border-radius: 25px;
    box-shadow: black 0px 0px 26px 2px;
    overflow-y: scroll;
    background:white;
">

<div class="container" style="flex-wrap:wrap;display:flex;">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

<style type="text/css">
.rad{
    border-radius: 50px !important;
    font-size: 18px !important;
}
.form-group{
    text-align: center;
}
.btnmy-primary:not(:disabled):not(.disabled).active:focus, .btnmy-primary:not(:disabled):not(.disabled):active:focus, .show>.btnmy-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(38,143,255,.5);
}
.btnmy-primary:not(:disabled):not(.disabled).active, .btnmy-primary:not(:disabled):not(.disabled):active, .show>.btnmy-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf;
}
.btnmy-primary.focus, .btnmy-primary:focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgba(38,143,255,.5);
}
.btnmy-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}
.btnmy.focus, .btnmy:focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
.btnmy:hover {
    color: #fff;
    text-decoration: none;
}
.btnmy-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.btnmy {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 10px 10px;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.myform-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffffb3;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
.myform-control {
    width: 100%;
    padding: 10px 10px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<form onsubmit="document.getElementById('rainbow-progress-bar').style.display = 'block';" style="text-align:center;margin-top:10vh;" action="<?=base_url()?>index.php/login/loginsubmit" method="POST" enctype='multipart/form-data'>
    <h2 align="center">LogIn</h2>
  <div class="form-group">
    <input name="username" required placeholder="User id" type="text" class="myform-control rad">
    <small class="form-text text-muted">Phone number | email | name</small>
  </div>
  <div class="form-group">
    <input name="password" type="password" required placeholder="Password" class="myform-control rad">
  </div>
  <small class="form-text text-muted" style="color:red !important;"><?php if(isset($lmsg)){echo $lmsg;}?></small>
  <button type="submit" class="go btnmy btnmy-primary rad">Go</button>
</form>

    </div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <br/>
<p align="center">Or</p>
<form onsubmit="document.getElementById('rainbow-progress-bar').style.display = 'block';" style="text-align:center;margin-top:10vh;" action="<?=base_url()?>index.php/login/createaccount" method="POST" enctype='multipart/form-data'>
    <h2 align="center">SignUp</h2>
  <div class="form-group">
    <input name="username" required placeholder="User id" type="text" class="myform-control rad">
    <small class="form-text text-muted">Phone number | email | name</small>
  </div>
  <div class="form-group">
    <input name="password" type="password" required placeholder="Password" class="myform-control rad">
  </div>
  <div class="form-group">
    <input name="cpassword" type="password" required placeholder="Confirm password" class="myform-control rad">
  </div>
  <small class="form-text text-muted" style="color:red !important;"><?php if(isset($smsg)){echo $smsg;} ?></small>
  <button style="background:turquoise !important;" type="submit" class="btnmy btnmy-primary rad">Create account</button>


  <br/><br/><br/>
</form>


    </div>
</div>

</div>

<?php if(isset($direct)){ ?>
<div style="margin-top: 5vh;
  margin-left: auto;
  margin-right: auto;
  width: 10vh;
  height: 10vh;">
  <a title="Ecommerce | Home" href="<?=base_url()?>">
  <button style="width: 100%;
    height: 100%;
    border: none;
    background: #ffffff80;
    border-radius: 100%;
    box-shadow: 0px 0px 26px 2px grey;outline:none;">
    <img src="<?=base_url()?>res/img/logo.png" style="width:100%" /></button>
    </a>
</div>
<?php }else{ ?>
<div style="margin-top: 5vh;
  margin-left: auto;
  margin-right: auto;
  width: 10vh;
  height: 10vh;">
  <button onclick="loginhd();" style="width: 100%;
    height: 100%;
    border: none;
    background: white;
    border-radius: 100%;
    box-shadow: 0px 0px 26px 2px grey;outline:none;"><i class="material-icons">&#xe5cd;</i></button>
</div>
<?php } ?>

</div>

<div class="container" style="text-align: justify;">

  <div class="row">
    <div class="col">
      <br/>
      <div style="margin-left:auto;margin-right:auto;" class="input-group mb-3 col-xs-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
        <input onkeyup="search(this.value);" style="border-radius: 50px 0px 0px 50px;" type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span style="border-radius: 0px 50px 50px 0px;" class="input-group-text" id="basic-addon2"><i class="material-icons">&#xe8b6;</i></span>
        </div>
      </div>
      <div id="search" style="width:100%;display:flex;flex-wrap:wrap;"></div>
      <br/>
      <div id="scr" style="overflow-x:auto;white-space:nowrap;height:60px;">
        <button class="fas scrbtn" style="left:0px;border-radius: 20px 0px 0px 20px;" onclick="
          document.getElementById('scr').scrollBy({top:0,left:-100,behavior:'smooth'});
        ">&#xf104;</button>
        <button class="cat" style="visibility:hidden;">a</button>
        <button onclick="products(this.value);" class="cat cactive" value="none">All</button>

        <?php if($rows){ foreach ($rows as $r){ ?>
        <button onclick="products(this.value);" class="cat" value="<?=$r->name?>"><?=$r->name?></button>
        <?php } } ?>

        <button class="cat" style="visibility:hidden;">a</button>
        <button class="fas scrbtn" style="right:0px;border-radius: 0px 20px 20px 0px;" onclick="
          document.getElementById('scr').scrollBy({top:0,left:100,behavior:'smooth'});
        ">&#xf105;</button>
      </div>
      <br/>
      <div id="products" style="border:none;width:100%;display:flex;flex-wrap:wrap;"></div>
      <br/>
      <br/>

    </div>
  </div>

</div>
<?php $this->load->view('foot'); ?>
<script type="text/javascript">
  function loginhd(){
                var logina = document.getElementById('logina');
                var login = document.getElementById('login');
                logina.style.transition = '0.5s';
                logina.style.opacity = '0%';
                logina.style.transform = 'scale(0)';
                setTimeout( myFunction , 100);
                function myFunction(){
                  logina.style.display = 'none';
                  login.style.display = 'none';
                }
  }
  function login(){
                var logina = document.getElementById('logina');
                var login = document.getElementById('login');
                logina.style.display = 'block';
                login.style.display = 'block';
                setTimeout( myFunction , 100);
                function myFunction(){
                    logina.style.transition = '0.5s';
                    logina.style.opacity = '100%';
                    logina.style.transform = 'scale(1)';
                }
  }
</script>
<script type="text/javascript">
  function search(thi){
    document.getElementById('rainbow-progress-bar').style.display = 'block';
    $.ajax("<?= base_url()?>products/products/search/"+thi).then(function(respons){
        $("#search").empty();
        $("#search").append(respons);
        document.getElementById('rainbow-progress-bar').style.display = 'none';
    })
  }
</script>
<script type="text/javascript">
  function products(thi){
    document.getElementById('rainbow-progress-bar').style.display = 'block';
    $.ajax("<?= base_url()?>products/products/"+thi).then(function(respons){
        $("#products").empty();
        $("#products").append(respons);
        document.getElementById('rainbow-progress-bar').style.display = 'none';
    })
  }
</script>
<script type="text/javascript">
// Add active class to the current button (highlight it)
var header = document.getElementById("scr");
var btns = header.getElementsByClassName("cat");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  
  var current = document.getElementsByClassName("cactive");
  current[0].className = current[0].className.replace(" cactive", "");
  this.className += " cactive";
  });
}
</script>
<script type="text/javascript">
  function addtofav(thi,a)
  {
      id = a.replace('a','');
      $.ajax("<?php echo base_url() ?>products/addtofav/"+id)

      .then(function(response){
        if(response==1){
          thi.style.display='none';
          document.getElementById(a).style.display='block';
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function remfrmfav(thi,d)
  {
      id = d.replace('d','');
      $.ajax("<?php echo base_url(); ?>products/remfrmfav/"+id)

      .then(function(response){
        if(response==1){
          thi.style.display='none';
          document.getElementById(d).style.display='block';
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function remfrmfavd(thi,d)
  {
      id = d.replace('d','');
      $.ajax("<?php echo base_url(); ?>products/remfrmfav/"+id)
      .then(function(response){
        if(response==1){
          $('#'+id+'rmv').hide('slow');
          // document.getElementById(id).style.display = 'none';
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function addtocart(thi,c)
  {
      id = c.replace('c','');
      $.ajax("<?php echo base_url() ?>products/addtocart/"+id)

      .then(function(response){
        if(response==1){
          thi.style.display='none';
          document.getElementById(c).style.display='block';
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function remfrmcart(thi,r)
  {
      id = r.replace('r','');
      $.ajax("<?php echo base_url(); ?>products/remfrmcart/"+id)

      .then(function(response){
        if(response==1){
          thi.style.display='none';
          document.getElementById(r).style.display='block';
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function remfrmcartd(thi,r)
  {
      id = r.replace('r','');
      $.ajax("<?php echo base_url(); ?>products/remfrmcart/"+id)

      .then(function(response){
        if(response==1){
          // document.getElementById(id+'rmv').style.display = 'none';
          $('#'+id+'rmv').hide('slow');
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
  function order(thi,r)
  {
      id = r.replace('r','');
      $.ajax("<?=base_url()?>index.php/products/buy/"+id)

      .then(function(response){
        if(response==1){
          $('#'+id+'rmv').hide('slow');
        }else if(response==0){
          window.location.href = "<?=base_url()?>index.php/profile/";
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
</script>
</body>
</html>