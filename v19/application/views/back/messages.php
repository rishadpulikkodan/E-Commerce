<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>res/css/scroll.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
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
    .act{
        float: right;
        margin-right: 10px;
        position: relative;
        top: -40px;
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
</head>
<body>
<div id="rainbow-progress-bar"></div>
<div class="container">
<br/>
<p align="center" class="h4">Messages/feedbacks</p>

  <div class="table-responsive f2" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;">

    <table class='table table-bordered table-sm table-hover table-striped' style='white-space:nowrap;'>
    <thead class='thead-dark'>
      <?php if($rows){ $this->load->model('Model'); ?>
        <tr>
            <th scope='col'># mid <i class="ricon material-icons">&#xe242;</i></th>
            <th scope='col'>Date <i class="ricon material-icons">&#xe8df;</i></th>
            <th scope='col'>Name <i class="ricon material-icons">&#xe264;</i></th>
            <th scope='col'>Email <i class="ricon material-icons">&#xe0be;</i></th>
            <th scope='col'>Subject <i class="ricon material-icons">&#xe261;</i></th>
            <th scope='col'>Message <i class="ricon material-icons">&#xe0e1;</i></th>
            <th scope='col'>User <i class="ricon material-icons">&#xe0d0;</i></th>
            <th scope='col'>Read <i class="ricon material-icons">&#xe5ca;</i></th>
        </tr>
        </thead>
        <?php foreach($rows as $r) { ?>
        <tr id="row<?=$r->id?>" style="transition:1s;">
            <td><?=$r->id?></td>
            <td><?php echo(date('d-F-Y h:i A',strtotime($r->date)));?></td>
            <td><?=$r->name?></td>
            <td><?=$r->email?></td>
            <td><?=$r->subject?></td>
            <td><?=$r->message?></td>
            <td>
              <?php if($r->uid != 'gust'){ echo $this->Model->getrow($r->uid,'users')->username; }else{ echo "gust"; } ?>
            </td>
            <td>
              <?php if($r->status == 0){ ?>
                <a onclick="document.getElementById('rainbow-progress-bar').style.display='block';" class="btn btn-success" href="<?=base_url()?>index.php/back/read/<?=$r->id?>">
                  <i class="ricon material-icons">&#xe5ca;</i> read
                </a>
              <?php } else { ?>
                  <i class="ricon material-icons">&#xe5ca;</i> read
              <?php } ?>
            </td>
        </tr>
        <?php } ?>
        </table>

<?php } else { echo "<p align='center'>0 results</p>"; } ?>

  </div>
</div>

</body>
</html>