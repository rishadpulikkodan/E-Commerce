<!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:hidden;">
<title>E Commerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="theme-color" content="blue" />
<meta name="msapplication-TileColor" content="blue" />
<meta name="msapplication-TileImage" content="<?=base_url()?>res/img/favicon.png" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="blue" />
<meta name="apple-mobile-web-app-title" content="E Commerce" />
<meta name="application-name" content="E Commerce" />
<link rel="apple-touch-icon" href="<?=base_url()?>res/img/favicon.png" />
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" href="<?=base_url()?>res/css/w3.css">
<link rel="stylesheet" href="<?=base_url()?>res/css/scroll.css">
<link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
<link rel="manifest" href="<?=base_url()?>res/json/manifest.json" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
.toast__msg {
  max-width: 290px;
  min-height: 50px;
  line-height: 50px;
  color: #fff;
  padding-left: 10px;
  padding-right: 10px;
  text-transform: initial;
  margin-bottom: 10px;
  background-color: #404040;
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
  word-break: break-all;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  -webkit-transform: translateY(20px);
  transform: translateY(20px);
  will-change: transform;
  position: fixed;
  bottom: 20px;
  left: 20px;
}

.toast__msg--show {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
</style>
<style type="text/css">
    body{
        margin:0px;
        user-select:none;
        touch-action:manipulation;
        overflow-y:hidden;
        overflow-x:hidden;
        font-family:sans-serif;
    }
    .menuc:hover .bar:nth-child(1){
        transition:1s;
        width:50%;
        margin-left:33%;
        margin-right:15%;
        margin-bottom:-14%;
        transform:rotate(45deg) !important;
    }
    .menuc:hover .bar:nth-child(2){
        transition:1s;
/*        width: 50%;
        margin-left:33%;
        margin-right:15%;
        margin-top:-14%;*/
        transform:rotate(0deg) !important;
    }
    .menuc:hover .bar:nth-child(3){
        transition:1s;
        width: 50%;
        margin-left:33%;
        margin-right:15%;
        margin-top:-14%;
        transform:rotate(-45deg) !important;
    }
    .menu{
        top: 5px;
        left: 5px;
        width: 40px;
        height: 40px;
        background-color: #e0eeff;
        color: #0065e2;
        border: none;
        outline:none;
        border-radius: 10px;
        position: fixed;
        box-shadow: 0px 0px 5px grey;
    }
    .menu:hover .bar:nth-child(1){
        transition:1s;
        width:50%;
        margin-left:33%;
        margin-right:15%;
        margin-bottom:-14%;
        transform:rotate(45deg) !important;
    }
    .menu:hover .bar:nth-child(2){
        transition:1s;
/*        width: 50%;
        margin-left:33%;
        margin-right:15%;
        margin-top:-14%;*/
        transform:rotate(0deg) !important;
    }
    .menu:hover .bar:nth-child(3){
        transition:1s;
        width: 50%;
        margin-left:33%;
        margin-right:15%;
        margin-top:-14%;
        transform:rotate(-45deg) !important;
    }
    .bar{
        transition:1s;
        transform: rotate(0deg);
        width:80%;
        border-radius:100px;
        height:10%;
        background:#0065e2;
        margin-left:10%;
        margin-right:10%;
        margin-top:10%;
        margin-bottom:10%;
    }

.ricon {
    float: right;
    padding-right: 8px;
    font-size: 18px !important;
}
.active{
	background:#b7d5fa;
  color: #0065e2;
  transition: 0.3s;
  border-radius: 100px 0px 0px 100px;
  margin-left: 5px;
}
a:hover{
  text-decoration: none;
  transition: 0.5s;
  color: #509eff!important;
  background-color: #b7d5fa66!important;
}

.shutt{
    width: 100vw;
    height: 100vh;
    position: fixed;
    transition:2s;
    background:blue;
    z-index: 2;
    transform-origin: 50% 50%;
    transform:scale(3) rotate(45deg);
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
<script>
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {

  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
          var top = document.getElementById("top");
          var bottom = document.getElementById("bottom");
          top.style.transition = '2s';
          bottom.style.transition = '2s';
          top.style.marginTop = "-100vh";
          bottom.style.marginTop = "100vh";
          top.style.transform = "rotate(0deg)";
          top.style.transform = "scale(1)";
          bottom.style.transform = "rotate(0deg)";
          bottom.style.transform = "scale(1)";
      },1000);
  }
}
</script>
<body>
<script type="text/javascript">
  $(".or").hide('slow');
  $(".ms").hide('slow');
  var or = 0;
  var auto_refresh = setInterval(
    function ()
    {
      $.ajax('<?= base_url()?>index.php/back/analyz/or').then(function(or){
        if(or==0){
          $(".or").hide('slow');
        }else{
          $(".or").show('slow');
          $(".or").empty();
          $(".or").append(or);
        }
      });
      $.ajax('<?= base_url()?>index.php/back/analyz/ms').then(function(ms){
        if(ms==0){
          $(".ms").hide('slow');
        }else{
          $(".ms").show('slow');
          $(".ms").empty();
          $(".ms").append(ms);
        }
      });
    },500);
</script>
<div id="rainbow-progress-bar"></div>
<div style="margin-top:-125vh;" id="top" class="shutt"></div>
<div class="w3-sidebar w3-bar-block w3-collapse w3-card" style="width:200px;background-color:#e7f1fd;box-shadow: 0px 0px 30px -10px #00000080;color:#00316d;overflow-x:hidden;" id="mySidebar">
  <button style="text-align-last:right;" class="w3-bar-item w3-button w3-large w3-hide-large menuc" onclick="w3_close()">
    <div style="
    width: 30px;
    height: 30px;
    margin-left: auto;
    margin-right: 0px;
    ">
      <div style="transform-origin: 80% 150%; transform: rotate(-45deg);" class="bar"></div>
      <div style="transform-origin:50% 50%; transform: rotate(135deg);" class="bar"></div>
      <div style="transform-origin: 80% -45%; transform: rotate(45deg);" class="bar"></div>
    </div>
  </button>

  <hr>
<div id="btnCls">
  <button onclick="link('dashboard');" class="w3-bar-item w3-button active">
        Dashboard<i class="ricon material-icons">&#xe871;</i>
  </button>
  <hr>
  <button onclick="link('orders');" class="w3-bar-item w3-button">
        Orders<i class="ricon material-icons">&#xe156;</i>
        <text class="or w3-badge w3-green" style="float:right;margin-right:10px;">0</text>
  </button>
  <button onclick="link('messages');" class="w3-bar-item w3-button">
        Messages<i class="ricon material-icons">&#xe0c9;</i>
        <text class="ms w3-badge w3-green" style="float:right;margin-right:10px;">0</text>
  </button>
  <hr>
  <text style="
    font-size: 12px;
    font-weight: bold;
">&nbsp; Product management
  </text>
  <button onclick="link('stocks');" class="w3-bar-item w3-button">
    Products<i class="ricon material-icons">&#xe8ee;</i>
  </button>
  <button onclick="link('addcatogery');" class="w3-bar-item w3-button">
    Categorys<i class="ricon material-icons">&#xe03b;</i>
  </button>
  <hr>
  <text style="
    font-size: 12px;
    font-weight: bold;
">&nbsp; Website (front end)
  </text>
  <button onclick="link('home');" class="w3-bar-item w3-button">
    Home<i class="ricon material-icons">&#xe88a;</i>
  </button>
  <button onclick="link('about');" class="w3-bar-item w3-button">
    About<i class="ricon material-icons">&#xe88f;</i>
  </button>
  <button onclick="link('posts');" class="w3-bar-item w3-button">
    Gallery (posts)<i class="ricon material-icons">&#xe413;</i>
  </button>
  <button onclick="link('branches');" class="w3-bar-item w3-button">
    Branchs<i class="ricon material-icons">&#xe0af;</i>
  </button>
  <hr>
  <text style="
    font-size: 12px;
    font-weight: bold;
">&nbsp; Invoice <text style="color:orange;">(developing)</text>
  </text>
  <button onclick="link('createinvoice');" class="w3-bar-item w3-button">
    Create invoice
    <i class="ricon material-icons">&#xe8a1;</i>
  </button>
  <button onclick="link('listinvoice');" class="w3-bar-item w3-button">
    List invoice<i class="ricon material-icons">&#xe8ee;</i>
  </button>
  <hr>
  <button onclick="link('editpass');" class="w3-bar-item w3-button">
    Change password<i class="ricon material-icons">&#xe3c9;</i>
  </button>
  <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';shutt();" 
      class="w3-bar-item w3-button" 
      href="<?= base_url()?>index.php/back/logout">
    Log Out
    <i class="ricon material-icons">&#xe5d9;</i>
  </a>
  <hr>
</div>

</div>

<div class="w3-main" style="margin-left:200px">

  <button class="menu w3-hide-large" onclick="w3_open()">
    <div style="transform-origin: 80% 150%;" class="bar"></div>
    <div style="transform-origin:50% 50%;" class="bar"></div>
    <div style="transform-origin: 80% -45%;" class="bar"></div>
  </button>
  <button style="
    transition:0.5s;
    position: fixed;
    border: none;
    top: 5px;
    right: 5px;
    border-radius: 10px;
    box-shadow: 0px 0px 5px grey;
    background-color: #e0eeff;
    color: #0065e2;
    outline:none;
    " class="full"  onclick="openFullscreen(this);"><i style="margin-top:4px;" class="material-icons">&#xe5d0;</i></button>

  <iframe style="
      width: 100%;
      height: 100vh;
      border: none;" src="<?=base_url()?>index.php/back/dashboard" name="main" id="myframe">
  </iframe>

</div>

<div style="margin-top:125vh;" id="bottom" class="shutt"></div>

  <div class="toast__msg"></div>
  <!-- JS Files  -->
<script src="<?=base_url()?>res/js/toast.js"></script>
<script src="<?=base_url()?>res/js/offline.js"></script>
<script src="<?=base_url()?>res/js/app.js"></script>
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
<script>
function shutt() {
    var top = document.getElementById("top");
    var bottom = document.getElementById("bottom");
    top.style.transition = '2s';
    bottom.style.transition = '2s';
    top.style.marginTop = "-50vh";
    bottom.style.marginTop = "50vh";
    top.style.transform = "scale(3) rotate(45deg)";
    bottom.style.transform = "scale(3) rotate(45deg)";

}
function w3_open() {
    document.getElementById("mySidebar").style.transition = '0.4s';
    document.getElementById("mySidebar").style.left = "0px";
    var bar = document.getElementsByClassName("bar");
    bar[0].style.transform = "rotate(-45deg)";
    bar[1].style.transform = "rotate(135deg)";
    bar[2].style.transform = "rotate(45deg)";
    bar[3].style.transform = "rotate(-45deg)";
    bar[4].style.transform = "rotate(135deg)";
    bar[5].style.transform = "rotate(45deg)";
}
function w3_close() {
    document.getElementById("mySidebar").style.transition = '0.4s';
    document.getElementById("mySidebar").style.left = "-200px";
    var bar = document.getElementsByClassName("bar");
    bar[0].style.transform = "rotate(0deg)";
    bar[1].style.transform = "rotate(0deg)";
    bar[2].style.transform = "rotate(0deg)";
    bar[3].style.transform = "rotate(0deg)";
    bar[4].style.transform = "rotate(0deg)";
    bar[5].style.transform = "rotate(0deg)";
}
</script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("btnCls");
var btns = header.getElementsByClassName(" w3-button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script> 

<script type="text/javascript">

let progressBar = document.querySelector("#rainbow-progress-bar");
window.onload = function() {
  progressBar.style.display = 'none';
};

document.getElementById('myframe').onload = function() {
  progressBar.style.display = 'none';
};

</script>

<script>
var mySidebar = document.getElementById("mySidebar");
function link(thi){
  document.getElementById('rainbow-progress-bar').style.display = 'block';
  document.getElementById('myframe').src = '<?= base_url()?>index.php/back/'+thi;
  window.location = '#'+thi;
  if (x.matches) { // If media query matches
    w3_close();
  }
}
function myFunction(x) {
}
var x = window.matchMedia("(max-width: 768px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes
</script>
<script>
var elem = document.documentElement;
function openFullscreen(thi) {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
  thi.style.opacity = "0%";
    setTimeout( myFunction , 500);
    function myFunction(){
        thi.setAttribute("onclick", "closeFullscreen(this)");
        thi.innerHTML = "<i style='margin-top:4px;' class='material-icons'>&#xe5d1;</i>";
        thi.style.opacity = "100%";
    }
}

function closeFullscreen(thi) {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
  thi.style.opacity = "0%";
    setTimeout( myFunction , 500);
    function myFunction(){
        thi.setAttribute("onclick", "openFullscreen(this)");
        thi.innerHTML = "<i style='margin-top:4px;' class='material-icons'>&#xe5d0;</i>";
        thi.style.opacity = "100%";
    }
}
</script>
<script src="<?=base_url()?>res/js/srcblock.js"></script>
</body>
</html>
