<?php if(isset($direct)){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="googlebot" content="Login - Ecommerce">
  <meta name="keywords" content="Login - Ecommerce">
  <meta property="og:image" content="<?=base_url()?>res/img/link">
  <meta property="og:url" content="<?=base_url()?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>res/img/favicon.png">
  <link rel="canonical" href="<?=base_url()?>">
  <link rel="stylesheet" href="<?=base_url()?>res/css/zw3.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/fade.css">
  <link rel="stylesheet" href="<?=base_url()?>res/css/zia.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url()?>res/css/bootstrap.css"> -->
  <link rel="stylesheet" href="<?=base_url()?>res/css/icon.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
  <script language="javascript" type="text/javascript" src="res/js/srcblock.js"></script>
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>res/js/jquery.min.js"></script>
  <style type="text/css">
@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
    @keyframes rainbow { 
  0% { background-position: 0% 100%; }
  50% { background-position: 100% 200%; }
  100% {background-position: 0% 100%; }
}
    #rainbow-progress-bar {
      position: absolute;
      left:0;
      right: 0;
      top: 0;
      bottom: 0;
      width: 100%;
      background: linear-gradient(124deg, #ec00ff, #fde5ff, #ff8d00, #f9ff00, #1de840, #1ddde8, #1200ff, #dd00f3, #f9b9ff);
      background-size: 900% 900%;
      animation: rainbow 9s ease infinite;
      height: 5px;
      z-index:100;
    }
  </style>

  <script>
  $(document).ready(function(){

    $("a").click(function(){
      $('#rainbow-progress-bar').fadeIn('slow');
    });

    $(".dropdown-btn").click(function(){
      $("#dropdowncontainer").slideToggle("slow");
      if( $("#toys").hasClass("faclicked") == true)
      {
        $("#toys").removeClass("faclicked");
      }
      else
      {
        $("#toys").addClass("faclicked");
      }
    });

  });
  </script>
</head>

<body>
<div id="rainbow-progress-bar"></div>

<?php }else{} ?>



<div id="login" style="
    width: 100%;
    height: 100vh;
    position: fixed;
    backdrop-filter: blur(10px);
    z-index: 6;
    background: #ffffff40;
    <?php if(isset($direct)){}else{echo"display:none;";}?>
">
    <div style="
    width: 90%;
    height: 75vh;
    margin: auto;
    margin-top: 5vh;
    border-radius: 25px;
    box-shadow: 0px 0px 26px 2px gray;
    overflow-y: scroll;

    /*background: linear-gradient(-45deg, blue,#ffffffbf,gray);*/
    background-size: 400% 400%;
    background: white;
    /*animation: gradient 15s ease infinite;*/
">

<div class="container">
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

<form style="text-align: center;" action="<?=base_url()?>index.php/login/loginsubmit" method="POST" enctype='multipart/form-data'>
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
<form style="text-align: center;" action="<?=base_url()?>login/createaccount" method="POST" enctype='multipart/form-data'>
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
  <a title="Home" href="<?=base_url()?>">
  <button style="width: 100%;
    height: 100%;
    border: none;
    background: #ffffff80;
    border-radius: 100%;
    box-shadow: 0px 0px 26px 2px grey;outline:none;">
    <img src="<?=base_url()?>res/img/home.png" style="width:100%;border-radius:50%;" />
  </button>
    </a>
</div>
<?php }else{ ?>
<div style="margin-top: 5vh;
  margin-left: auto;
  margin-right: auto;
  width: 10vh;
  height: 10vh;">
  <button onclick="document.getElementById('login').style.display = 'none';" style="width: 100%;
    height: 100%;
    border: none;
    background: white;
    border-radius: 100%;
    box-shadow: 0px 0px 26px 2px grey;outline:none;"><i class="material-icons">&#xe5cd;</i></button>
</div>
<?php } ?>

</div>



<?php if(isset($direct)){ ?>
</div>
<script type="text/javascript">
let progressBar = document.querySelector("#rainbow-progress-bar");
window.onload = function() {
  progressBar.style.display = 'none';
};
</script>

</body>
</html>

<?php }else{} ?>