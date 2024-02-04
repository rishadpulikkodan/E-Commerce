<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>res/css/scroll.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .btn{
        border-radius:100px;
    }
    td{
        vertical-align: middle !important;
    }
    th{
        font-weight: normal !important;
        vertical-align: middle !important;
    }
    .ricon{
    font-size: 18px;
    vertical-align: middle;
    }
    .mimg:hover{
        transition:3s !important;
        width:400px !important;
    }
    .alertbg{
        display: none;
        position: fixed;
        top: 0px;
        width: 100vw;
        height: 100vh;
        z-index: 1;
    }
    #view{
        text-align: center;
        display: none;
        opacity: 0%;
        transition: 0.5s;
        transform: scale(0);
        transform-origin: 50% 50%;
        position: fixed;
        top: 12.5vh;
        left: 12.5vw;
        z-index: 2;
        width: 75vw;
        height: 75vh;
        background: #ffffff4d;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px#80808080;
        backdrop-filter: blur(10px);
        overflow: auto;
    }
    #removealert{
        display: none;
        opacity:0%;
        transition:0.5s;
        transform:scale(0);
        transform-origin:100% 50%;
        position: fixed;
        top: 25vh;
        left: 12.5vw;
        z-index: 2;
        width: 75vw;
        height: 25vh;
        background:#ffffff4d;
        border-radius:10px;
        box-shadow:0px 0px 10px 0px#80808080;
        backdrop-filter: blur(10px);
    }
    .act{
        float: right;
        margin-right: 10px;
        position: relative;
        top: -40px;
    }
    #salert{
        position: fixed;
        transition:5s;
        margin-top: 10px;
        width: 90%;
        margin-left: 5%;
        opacity:100%;
        background: #d4eddabf;
        backdrop-filter: blur(3px);
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
  <script type="text/javascript">
      $(document).ready(function() {
            var salert = document.getElementById('salert');
            salert.style.transition = '5s';
            salert.style.opacity = "0%";
            setTimeout( myFunction , 5000);
            function myFunction()
            {
                salert.style.display = "none";
            }
      });
  </script>
</head>
<body>

<div id="rainbow-progress-bar"></div>
<div class="container">
<?php if(isset($msg)) { ?>
    <div class="alert alert-success" role="alert" id="salert">
        <?=$msg?>
    </div>
<?php } ?>

<br/>
<p align="center" class="h4">Branches | <a href="<?= base_url()?>index.php/back/addbranch"><i class="material-icons">&#xe146;</i> Add branches</a></p>

  <div class="table-responsive f2" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;">

    <table class='table table-bordered table-sm table-hover table-striped' style='white-space:nowrap;'>
    <thead class='thead-dark'>
      <?php if($rows){ ?>
        <tr>
            <th scope='col'># id <i class="ricon material-icons">&#xe242;</i></th>
            <th scope='col'>name <i class="ricon material-icons">&#xe264;</i></th>
            <th scope='col' class="bg-success">Phone <i class="ricon material-icons">&#xe0cd;</i></th>
            <th scope='col'>Email <i class="ricon material-icons">&#xe0be;</i></th>
            <th scope='col'>Pin <i class="ricon material-icons">&#xe0c8;</i></th>
            <th scope='col' style="text-align:center;">Actions <i class="ricon material-icons">&#xe8b8;</i></th>
            <th scope='col'>Map <i class="ricon material-icons">&#xe55b;</i></th>
        </tr>
        </thead>
        <?php foreach($rows as $r) { ?>
        <tr id="row<?=$r->id?>" style="transition:1s;">
            <td><?=$r->id?></td>
            <td><?=$r->name?></td>
            <td><?=$r->phone?></td>
            <td><?=$r->email?></td>
            <td><?=$r->pin?> <a href="<?=$r->pin?>" target="_blank"><i class="ricon material-icons">&#xe0c8;</i></a></td>
            <td>
            <a id="<?=$r->id?>" onclick="removealert(this.id);document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-danger" />delete 
            <i class="ricon material-icons">&#xe92b;</i>
            </a></td>
            <td><?=$r->map?></td>
        </tr>
        <?php } ?>
        </table>

<?php } else { echo "<p align='center'>0 results</p>"; } ?>

  </div>
</div>

<div class="alertbg" id='viewbg'>
    <div id="view"></div>
</div>

<div class="alertbg" id='removealertbg'>
    <div id="removealert"></div>
</div>

<script type="text/javascript">
    function removealert(id){

            $.ajax("<?=base_url()?>index.php/back/branchremovealert/"+id)

            .then(function(response){

                document.getElementById('rainbow-progress-bar').style.display = 'none';
                var removealert = document.getElementById('removealert');
                var removealertbg = document.getElementById('removealertbg');
                removealert.style.display = 'block';
                removealertbg.style.display = 'block';
                removealert.innerHTML = response;

                setTimeout( myFunction , 100);
                function myFunction(){
                    removealert.style.transition = '0.5s';
                    removealert.style.opacity = '100%';
                    removealert.style.transform = 'scale(1)';
                }

            }).fail(function(err){
                alert("Server failed error");
            })
    }

    function hdalert(){
        var removealert = document.getElementById('removealert');
        var viewalert = document.getElementById('view');
        removealert.style.transition = '0.5s';
        removealert.style.opacity = '0%';
        removealert.style.transform = 'scale(0)';

        viewalert.style.transition = '0.5s';
        viewalert.style.opacity = '0%';
        viewalert.style.transform = 'scale(0)';
        setTimeout( myFunction , 500);
        function myFunction()
        {
            removealert.style.display = 'none';
            viewalert.style.display = 'none';
            document.getElementById('removealertbg').style.display = 'none';
            document.getElementById('viewbg').style.display = 'none';
        }
    }

    function remove(id){

            $.ajax("<?=base_url()?>index.php/back/removebranch/"+id)

            .then(function(response){

                var row = document.getElementById('row'+id);
                row.style.transition = '0.5s';
                row.style.height = '25px';
                row.style.background = 'yellow';

                var header = document.getElementById('row'+id);
                var btns = header.getElementsByTagName("td");
                for (var i = 1; i < btns.length; i++) {
                  btns[i].style.transition = '0.5s';
                  btns[i].style.opacity = '0%';
                }
                setTimeout( myFunction , 500);
                    function myFunction() { 
                        for (var i = 0; i < btns.length; i++) {
                            btns[i].style.transition = '0.5s';
                            btns[i].style.display = 'none';
                        }
                        row.style.transition = '0.5s';
                        row.style.height = '0px';

                            var removealert = document.getElementById('removealert');
                            removealert.style.transition = '0.5s'
                            removealert.style.opacity = '0%';
                            removealert.style.transform = 'scale(0)';
                            setTimeout( myFunction , 500);
                            function myFunction()
                            {
                                removealert.style.display = 'none';
                                document.getElementById('removealertbg').style.display = 'none';
                            }
                    }

            }).fail(function(err){
                alert(err);
            })
    }
</script>
</body>
</html>