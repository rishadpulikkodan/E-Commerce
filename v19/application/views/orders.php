<html>
<head>
<title>Orders - Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#f08f1c">
<meta name="description" content="Orders - Ecommerce">
<meta property="og:title" content="Orders - Ecommerce" />
<meta property="og:description" content="Orders - Ecommerce">
<meta property="og:image" itemprop="image" content="<?=base_url()?>res/img/link">
<link rel="icon" sizes="192x192" href="<?=base_url()?>res/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/anim.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<style>
  .btn{
    border-radius:100px;
  }
  .ricon{
    font-size: 18px;
    vertical-align: middle;
  }
  td{
    vertical-align:middle !important;
  }
</style>
</head>
<body style="overflow-y:auto !important;" onload="srcblock();offprogress();">
<?php $data['ur'] = 'orders'; $this->load->view('nav',$data); ?>
<div id="acc" style="
    transition:0.5s;
    position: fixed;
    white-space: nowrap;
    width: 44px;
    height: 44px;
    top: 70px;
    background-color: #80808080;
    right: 10px;
    border-radius: 100px;
    backdrop-filter: blur(5px);
    z-index: 6;
">
  <button style="
    background: #ffffff40;
    margin: 2px;
    height: 40px;
    width: 40px;
    border-radius: 100%;
    border: none;outline:none;" onclick="login();" class="accb" onclick="window.location.href='<?=base_url()?>profile'" title="profile"><i class="material-icons">&#xe853;</i></button>
</div>

<div class="container">
  <br/>
  <div class="row">
    <div class="col">
        <?php if ($rows) { ?>
        <p style="font-size: 25px;" align="center">Your orders</p>
        <div class="table-responsive" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;margin-left:5px;">
            <table class='table table-striped table-bordered table-sm table-hover' style='white-space:nowrap;'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>pid <i class="ricon material-icons">&#xe242;</i></th>
                        <th style="text-align:center;" scope='col'><i class="ricon material-icons">&#xe251;</i></th>
                        <th scope='col'>Name <i class="ricon material-icons">&#xe264;</i></th>
                        <th scope='col'>Price <i class="ricon material-icons">&#xe227;</i></th>
                        <th scope='col'>Date <i class="ricon material-icons">&#xe8df;</i></th>
                        <th scope='col'></th>
                        <th style="text-align:center;" scope='col'>Pay <i class="ricon material-icons">&#xe8a1;</i></th>
                        <th scope='col'>Status <i class="ricon material-icons">&#xe88e;</i></th>
                        <th style="text-align:center;" scope='col'>View <i class="ricon material-icons">&#xe417;</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r) { ?>
                    <tr>
                        <td><?=$r->id?></td>
                        <td style="text-align:center;"><img class="mimg" style="width:30px;transition:0.5s;" src="<?php echo base_url()."res/images/".$r->name.$r->id.".png";?>" /></td>
                        <td><?=$r->name?></td>
                        <td><?=$r->price?></td>
                        <td><?=$r->date?></td>
                        <td id="<?=$r->id?>p" style="color:transparent;">pid="<?=$r->pid?>"&uid="<?=$r->uid?>"</td>
                        <td style="text-align:center;">
                            <button type="button" onclick="copyToClipboard('#<?=$r->id?>p','<?=$r->id?>')" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copy & Past to What's this for?">
                                <i style="font-family: FontAwesome;font-weight:100;" class="fa">&#xf1a0;</i> Pay
                            </button>
                        </td>
                        <td><?=$r->status?></td>
                        <td style="text-align:center;"><a class="btn btn-primary" href="<?=base_url()?>products/view/<?=$r->id?>/<?=$r->name?>">view <i class="ricon material-icons">&#xe417;</i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br/>
        <p align="center">Pay all 
            <button type="button" onclick="copyToClipboard('#all','all')" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copy & Past to What's this for?">
                <i style="font-family: FontAwesome;font-weight:100;" class="fa">&#xf1a0;</i> Pay
            </button>
            <text style="visibility:hidden;" id="all">all</text>
        </p>
        <?php } else{ ?>
        <p align="center">0 results</p>
        <?php } ?>

        <?php if ($irows) { ?>
        <br/>
        <p align="center">Dispatched orders</p>
        <div class="table-responsive" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;margin-left:5px;">
            <table class='table table-striped table-bordered table-sm table-hover' style='white-space:nowrap;'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>pid</th>
                        <th style="text-align:center;" scope='col'><i class="ricon material-icons">&#xe251;</i></th>
                        <th scope='col'>Name <i class="ricon material-icons">&#xe264;</i></th>
                        <th scope='col'>Price <i class="ricon material-icons">&#xe227;</i></th>
                        <th scope='col'>Order date <i class="ricon material-icons">&#xe8df;</i></th>
                        <th scope='col'>Status <i class="ricon material-icons">&#xe88e;</i></th>
                        <th style="text-align:center;" scope='col'>View <i class="ricon material-icons">&#xe417;</i></th>
                        <th scope='col'>Arrival</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($irows as $r) { ?>
                    <tr class="table-success">
                        <td><?=$r->id?></td>
                        <td style="text-align:center;"><img class="mimg" style="width:30px;transition:0.5s;" src="<?php echo base_url()."res/images/".$r->name.$r->id.".png";?>" /></td>
                        <td><?=$r->name?></td>
                        <td><?=$r->price?></td>
                        <td><?=$r->date?></td>
                        <td><?=$r->status?></td>
                        <td style="text-align:center;"><a class="btn btn-primary" href="<?=base_url()?>products/view/<?=$r->id?>/<?=$r->name?>">view <i class="ricon material-icons">&#xe417;</i></a></td>
                        <td>
                          <?php
                            if($r->status == "arrived"){ ?>
                              <i class="ricon material-icons">&#xe5ca;</i>
                            <?php } else { ?>
                              <a class="btn btn-primary" href="<?=base_url()?>products/arrived/<?=$r->uid?>/<?=$r->pid?>/<?=$r->status?>">arrived <i class="ricon material-icons">&#xe5ca;</i></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>
  </div>
  <br/>
</div>
<?php $this->load->view('foot'); ?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script type="text/javascript">
function copyToClipboard(element,id) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  // copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  $temp.remove();
  $.ajax("<?= base_url()?>index.php/products/pay/"+id).then(function(respons){

  })
  window.open('https://gpay.app.goo.gl/pay-i5mrpEJfrwd', '_blank');
}
</script>
</body>
</html>