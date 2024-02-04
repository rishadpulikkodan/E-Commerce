<!DOCTYPE html>
<html>
<head>
<title><?=$row->name?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="<?=$row->info?>">
<meta name="author" content="Ecommerce">
<meta name="keywords" content="Ecommerce, <?=$row->name?>, <?=$row->info?>">
<meta property="og:title" content="<?=$row->name?>" />
<meta property="og:description" content="<?=$row->info?>">
<meta property="og:image" content="<?=base_url()?>res/img/link" />
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style type="text/css">
@media (max-width: 992px){
/*for mobile*/
  body{
      margin:0px;
      user-select:none;
      /*touch-action:manipulation;*/
      overflow-y:auto;
      overflow-x:hidden;
      font-family:sans-serif;
  }
	#img{
		position:absolute;
		top:0px;
		width:100%;
		height:75vh;
		transition:0.5s;
    background-color:rgba(255,255,255,0.5);
	}
	#ctrls{
    background: white;
		width:100%;
		padding: 0px 35px 35px 35px;
		top: 75vh;
    position: absolute;
    border-radius:100px;
	}
}
@media (min-width: 992px){
/*for desktop*/
  body{
      margin:0px;
      user-select:none;
      /*touch-action:manipulation;*/
      overflow:hidden;
      font-family:sans-serif;
  }
	#img{
		position:absolute;
		top:0px;
		width:75%;
		height:100vh;
		transition:0.5s;
    background-color:rgba(255,255,255,0.5);
	}
	#ctrls{
    background: white;
		width:25%;
		position: absolute;
	  top: 0;
	  right: 0;
	  padding: 35px;
    border-radius:100px;
	}
}
.imsbtn{
	  height: 50px;
   	width: 50px;
   	outline:none !important;
   	border: 0.5px solid #80808080;
   	border-radius: 5px;
    transition:0.5s;
}
.imsbtn:hover ,.imsbtn:active, .imsbtn:focus, .imsbtna{
    width: 50px;
    border:5px solid gray;
    border-radius: 20px;
    width:70px;
}
.btn{
    width: 60%;
    margin:12px auto;
    height:40px;
    border-radius: 50px;
}
.mic{
	float: right;
   	font-size: 25px;
}
.zomfrm{
  width:100%;
  height:33.3%;
  display:flex;
}
.zoom{
  width:33.3%;
  height:100%;
}
</style>
<style type="text/css">
.inline-group {
  max-width: 9rem;
  padding: .5rem;
}

.inline-group .form-control {
  text-align: right;
}

.form-control[type="number"]::-webkit-inner-spin-button,
.form-control[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
</head>
<body onload="">

<div onclick="loginhd();" ontouchmove="loginhd();" id="login" style="
	transition:0.5s;
	width: 100%;
    height: 100vh;
    position:fixed;
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

<form onsubmit="document.getElementById('rainbow-progress-bar').style.display = 'block';" style="text-align:center;margin-top:10vh;" action="<?=base_url()?>login/loginsubmit" method="POST" enctype='multipart/form-data'>
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
<form onsubmit="document.getElementById('rainbow-progress-bar').style.display = 'block';" style="text-align:center;margin-top:10vh;" action="<?=base_url()?>login/createaccount" method="POST" enctype='multipart/form-data'>
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
  <a title="" href="<?=base_url()?>">
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
    box-shadow: 0px 0px 26px 2px grey;outline:none;"><i style="font-size:24px" class="fa">&#xf00d;</i></button>
</div>
<?php } ?>

</div>

<div id="img" style="
		background-image: url('<?=base_url()?>res/images/<?=$row->name.$row->id?>.png');
      	background-repeat: no-repeat;
      	background-size: contain;
      	background-position: center center;
	">
  <div class="zomfrm">
   <div ondblclick="zoomin('0% 0%');" class="zoom"></div>
   <div ondblclick="zoomin('50% 0%');" class="zoom"></div>
   <div ondblclick="zoomin('100% 0%');" class="zoom"></div>
  </div>
  <div class="zomfrm">
   <div ondblclick="zoomin('0% 50%');" class="zoom"></div>
   <div ondblclick="zoomin('50% 50%');" class="zoom"></div>
   <div ondblclick="zoomin('100% 50%');" class="zoom"></div>
  </div>
  <div class="zomfrm">
   <div ondblclick="zoomin('0% 100%');" class="zoom"></div>
   <div ondblclick="zoomin('50% 100%');" class="zoom"></div>
   <div ondblclick="zoomin('100% 100%');" class="zoom"></div>
  </div>
</div>

<div id="ctrls">
	<div style="display:flex;">
		<div style="overflow-x:auto;white-space:nowrap;box-shadow:inset -50px 0px 20px -25px grey;border-right:10px solid gray;padding: 10px 0px;border-radius: 25px;" id="imsbtns">
			<button onclick="img('<?=base_url()?>res/images/<?=$row->name.$row->id?>.png');" class="imsbtn imsbtna" style="
				background-image: url('<?=base_url()?>res/images/<?=$row->name.$row->id?>.png');
		      	background-repeat: no-repeat;
		      	background-size: contain;
		      	background-position: center center;
		      	text-shadow: 0px 0px 10px black;
			"></button>
			<?php
			if($rows){
				foreach($rows as $r){ ?>
					<button onclick="img('<?=base_url()?>res/gallery/<?=$r->name?>');" class="imsbtn" style="
						background: url('<?=base_url()?>res/gallery/<?=$r->name?>');
				      	background-repeat: no-repeat;
				      	background-size: contain;
				      	background-position: center center;
					"></button>
				<?php }
			}
			?>
		</div>
	</div>
	<br/>
  <table width="100%">
    <tr>
      <td>
        <text style="font-size:30px;"><?=$row->name?></text>
      </td>
      <td align="right" rowspan="2">
        <div style="padding-bottom: 0px;" class="input-group inline-group">
          <div class="input-group-prepend">
            <button onclick="qty('m');" style="width:35px;margin-bottom:0px;" class="btn btn-primary btn-minus">
              <i class="fa fa-minus"></i>
            </button>
          </div>
          <input id="qty" style="margin-top:12px;color:blue;font-size:25px;" class="form-control quantity btn btn-outline-primary" min="1" max="5" name="quantity" value="1" type="number" disabled="disabled">
          <div class="input-group-append">
            <button onclick="qty('p');" style="width:35px;margin-bottom:0px;" class="btn btn-primary btn-plus">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <text style="margin-right:45px;font-size:14px;">Quantity</text>
      </td>
    </tr>
    <tr>
      <td>
        <text style="font-size:20px;"><i class='fas'>&#xf156;</i>&nbsp;:&nbsp;<b style="transition:0.5s;" id="price"><?=$row->price?></b></text>
      </td>
    </tr>
  </table>
	<br/>
	<p style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;<?=$row->info?></p>
  <?php if($row->type != 'none'){ ?><p>Category : <?=$row->type?></p><?php } ?>
	<div style="text-align:center;">

		<button class="btn btn-success" onclick="whatsapp('<?=$row->id?>');" title="Quick Order now via WhatsApp">
      <text>Order via Wa</text><i class='mic fab'>&#xf232;</i>
    </button>
    <br/>
<?php if($this->session->userdata('user')){ $userpre = $this->session->userdata('user')['privilege']; 
 $uid= $this->session->userdata('user')['id']; } ?>

    <?php if(isset($userpre) && $userpre == array_keys(return_privilage())[1]){ 
    if($this->Model->checkrowc('carts','uid',$uid,'pid',$row->id,'status','order')) { ?>
      <a href="<?=base_url().'products/orders/'.$row->id;?>">
      <button class="btn btn-outline-success" title="View orders">
        <text>View orders</text><i class='mic fas'>&#xf48b;</i>
      </button>
      </a>
    <?php } else{ ?>
      <a href="<?=base_url().'products/order/'.$row->id;?>">
      <button class="btn btn-success" title="Buy now">
        <text>Buy now</text><i class='mic fas'>&#xf48b;</i>
      </button>
      </a>
    <?php } } else { ?>
      <button class="btn btn-success" onclick="login();" title="LogIn to Buy now">
        <text>Buy now</text><i class='mic fas'>&#xf48b;</i>
      </button>
    <?php } ?>

    <br/>

    <?php if(isset($userpre) && $userpre == array_keys(return_privilage())[1]){ 
    if($this->Model->checkrowc('carts','uid',$uid,'pid',$row->id,'status','cart')) { ?>
      <a href="<?=base_url().'products/carts/';?>">
      <button class="btn btn-outline-primary" title="View carts">
        <text>View carts</text><i class='mic fas'>&#xf217;</i>
      </button>
      </a>
    <?php } else{ ?>
      <a href="<?=base_url().'products/addtocarts/'.$row->id;?>">
      <button class="btn btn-primary" title="Add to cart">
        <text>Add to cart</text><i class='mic fas'>&#xf217;</i>
      </button>
      </a>
    <?php } } else { ?>
      <button class="btn btn-primary" onclick="login();" title="LogIn to Add to cart">
        <text>Add to cart</text><i class='mic fas'>&#xf217;</i>
      </button>
    <?php } ?>

    <br/>

    <?php if(isset($userpre) && $userpre == array_keys(return_privilage())[1]){ 
    if($this->Model->checkrowb('favs','uid',$uid,'pid',$row->id)) { ?>
      <a href="<?=base_url().'products/favorites/';?>">
      <button class="btn btn-outline-danger" title="View favorites">
        <text>View favs</text><i class='mic far'>&#xf004;</i>
      </button>
      </a>
    <?php } else { ?>
      <a href="<?=base_url().'products/addtofavs/'.$row->id;?>">
      <button class="btn btn-danger" title="Add to favorites">
        <text>Add to fav</text><i class='mic far'>&#xf004;</i>
      </button>
      </a>
    <?php } } else { ?>
		  <button class="btn btn-danger" onclick="login();" title="LogIn to Add to favorites">
        <text>Add to fav</text><i class='mic far'>&#xf004;</i>
      </button>
    <?php } ?>

    <br/>
    
    <?php if(isset($userpre) && $userpre == array_keys(return_privilage())[1]){ }else{ ?>
      <button class="btn btn-primary" onclick="login();" title="LogIn">
        <text>LogIn</text><i class='mic fas'>&#xf2f6;</i>
      </button>
    <?php } ?>

    <br/>

	</div>
</div>
<script type="text/javascript">
function qty(thi){
  var qty = parseInt(document.getElementById('qty').value);
  var priceval = <?=$row->price?>;
  if (thi == 'm')
  {
      if(qty == 1){ var qty = 1; }
      else{ var qty = qty - 1; }
  }
  else if(thi=='p')
  {
      if(qty == 5){ var qty = 5; }
      else{ var qty = qty + 1; }
  }
  var priceelm = document.getElementById('price');
  priceelm.innerHTML = priceval * qty;
}
</script>
<script type="text/javascript">
$('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})
</script>
<script type="text/javascript">
function zoomin(thi){
  var img = document.getElementById('img');
  img.style.transformOrigin = thi;
  img.style.transform = "scale(2)";

  var plts = img.getElementsByClassName("zoom");
  for (var i = 0; i < plts.length; i++) {
    plts[i].setAttribute("ondblclick", "zoomout();");
  }
}
function zoomout(){
  var img = document.getElementById('img');
  img.style.transform = "scale(1)";
  var plts = img.getElementsByClassName("zoom");
  plts[0].setAttribute("ondblclick", "zoomin('0% 0%');");
  plts[1].setAttribute("ondblclick", "zoomin('50% 0%');");
  plts[2].setAttribute("ondblclick", "zoomin('100% 0%');");

  plts[3].setAttribute("ondblclick", "zoomin('0% 50%');");
  plts[4].setAttribute("ondblclick", "zoomin('50% 50%');");
  plts[5].setAttribute("ondblclick", "zoomin('100% 50%');");

  plts[6].setAttribute("ondblclick", "zoomin('0% 100%');");
  plts[7].setAttribute("ondblclick", "zoomin('50% 100%');");
  plts[8].setAttribute("ondblclick", "zoomin('100% 100%');");

}
</script>
<script type="text/javascript">
  function img(thi){
    var img = document.getElementById('img');
    img.style.transition = '0.5s';
    img.style.backgroundImage = "url("+thi+")";
    img.style.backgroundRepeat = 'no-repeat';
    img.style.backgroundSize = 'contain';
    img.style.backgroundPosition = 'center center';
  }
</script>
<script type="text/javascript">
  function whatsapp(id){
      $.ajax("<?=base_url()?>index.php/products/whatsapp/"+id)
      .then(function(response){
        if(response==1){
          window.open(
            'https://api.whatsapp.com/send?phone=+918592897844&text=I%20want%20to%20purchase%20this%20product%0A%0A%0A'+window.location.href+'%0A%0Amy%20name%20and%20address%20are%0A___',
            '_blank'
           );
        }else{
          alert(response);
        }
      }).fail(function(err){
        alert("Server failed error");
      })
  }
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
                logina.style.transition = '0.5s';
	            logina.style.display = 'block';
	            login.style.display = 'block';
                setTimeout( myFunction , 100);
                function myFunction(){
                	logina.style.opacity = '100%';
                	logina.style.transform = 'scale(1)';
                }
  }
</script>
<script type="text/javascript">
// Add active class to the current button (highlight it)
var header = document.getElementById("imsbtns");
var btns = header.getElementsByClassName("imsbtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  
  var current = document.getElementsByClassName("imsbtna");
  current[0].className = current[0].className.replace(" imsbtna", "");
  this.className += " imsbtna";
  });
}
</script>
<script src="<?= base_url()?>res/js/srcblock.js"></script>
</body>
</html>