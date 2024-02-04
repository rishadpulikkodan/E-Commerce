<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>res/css/bootstrap.css">
<link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src='<?=base_url()?>res/js/a076d05399.js'></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="<?=base_url()?>res/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<body style="overflow-y:auto !important;">

<div class="container">
  <br/>
  <div class="row">
    <div class="col">
        
        <p style="font-size: 25px;" align="center">Total orders</p>
        <?php if ($rows) { $this->load->model('Model'); ?>
        
        <div class="table-responsive" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;">
            <table class='table table-striped table-bordered table-sm table-hover' style='white-space:nowrap;'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col' class="bg-success">uid <i class="ricon material-icons">&#xe242;</i></th>
                        <th scope='col'>Date <i class="ricon material-icons">&#xe8df;</i></th>
                        <th scope='col' class="bg-success">Username <i class="ricon material-icons">&#xe853;</i></th>
                        <th scope='col' class="bg-success">Name</th>
                        <th scope='col' class="bg-success">Place <i class="ricon material-icons">&#xe242;</i></th>
                        <th scope='col' class="bg-success">Address <i class='ricon fas'>&#xf2bb;</i></th>
                        <th scope='col' class="bg-success">Phone <i class="ricon material-icons">&#xe0cd;</i></th>

                        <th scope='col' align="right">pid <i class="ricon material-icons">&#xe242;</i></th>
                        <th style="text-align:center;" scope='col'><i class="ricon material-icons">&#xe251;</i></th>
                        <th scope='col'>Name <i class="ricon material-icons">&#xe264;</i></th>
                        <th scope='col'>Price <i class="ricon material-icons">&#xe227;</i></th>
                        <th scope='col'>if G pay code</th>
                        <th scope='col'>Status <i class="ricon material-icons">&#xe88e;</i></th>
                        <th style="text-align:center;" scope='col'>View <i class="ricon material-icons">&#xe417;</i></th>
                        <th scope='col'>Dispatch <i class="ricon material-icons">&#xe558;</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r) { $u = $this->Model->getrow($r->uid,'users'); ?>
                    <tr>
                        <td class="table-success"><?=$u->id?></td>
                        <td><?=$r->date?></td>
                        <td class="table-success"><?=$u->username?></td>
                        <td class="table-success"><?=$u->name?></td>
                        <td class="table-success"><?=$u->place?></td>
                        <td class="table-success"><?=$u->address?></td>
                        <td class="table-success"><?=$u->phone?> <a class="btn btn-success" href="tel:<?=$u->phone?>"><i class="material-icons">&#xe0cd;</i></a></td>
                        <?php $p = $this->Model->getrow($r->pid,'products');
                        if($p){?>
                        <td align="right"><?=$p->id?></td>
                        <td style="text-align:center;">
                          <img class="mimg" style="width:30px;transition:0.5s;" src="<?php echo base_url().'res/images/'.$p->name.$p->id.'.png';?>" /></td>
                        <td><?=$p->name?></td>
                        <td><?=$p->price?></td>
                        <td style="text-align:center;">pid="<?=$r->pid?>"&uid="<?=$r->uid?>"</td>
                        <td><?=$r->status?></td>
                        <td style="text-align:center;"><a target="_blank" class="btn btn-primary" href="<?=base_url()?>index.php/products/view/<?=$p->id?>/<?=$p->name;?>">view <i class="ricon material-icons">&#xe417;</i></a></td>
                        <td><a class="btn btn-primary" href="<?=base_url()?>index.php/back/dispatch/<?=$r->uid?>/<?=$r->pid?>/<?=$r->status?>/">dispatch <i class="ricon material-icons">&#xe163;</i></a></td>
                        <?php } else { ?>
                        <td colspan="8" style="color:red;">removed product</td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } else{ ?>
        <p align="center">0 results</p>
        <?php } ?>



        <?php if ($iirows) { ?>
        <br/>
        <p align="center">WhatsApp orders</p>
        <div class="table-responsive" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;">
            <table class='table table-striped table-bordered table-sm table-hover' style='white-space:nowrap;'>
                <thead class='thead-dark'>
                    <tr>

                        <th scope='col'>Date <i class="ricon material-icons">&#xe8df;</i></th>
                        <th scope='col' align="right">pid <i class="ricon material-icons">&#xe242;</i></th>
                        <th style="text-align:center;" scope='col'><i class="ricon material-icons">&#xe251;</i></th>
                        <th scope='col'>Name <i class="ricon material-icons">&#xe264;</i></th>
                        <th scope='col'>Price <i class="ricon material-icons">&#xe227;</i></th>
                        <th scope='col'>if G pay code</th>
                        <th scope='col'>Status <i class="ricon material-icons">&#xe88e;</i></th>
                        <th style="text-align:center;" scope='col'>View <i class="ricon material-icons">&#xe417;</i></th>
                        <th scope='col'>Dispatch <i class="ricon material-icons">&#xe558;</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($iirows as $r) { $u = $this->Model->getrow($r->uid,'users'); ?>
                    <tr>
                        <td><?=$r->date?></td>
                        <?php $p = $this->Model->getrow($r->pid,'products');
                        if($p){ ?>
                        <td align="right"><?=$p->id?></td>
                        <td style="text-align:center;">
                          <img class="mimg" style="width:30px;transition:0.5s;" src="<?php echo base_url().'res/images/'.$p->name.$p->id.'.png';?>" /></td>
                        <td><?=$p->name?></td>
                        <td><?=$p->price?></td>
                        <td style="text-align:center;">pid="<?=$r->pid?>"&uid="<?=$r->uid?>"</td>
                        <td><?=$r->status?></td>
                        <td style="text-align:center;"><a target="_blank" class="btn btn-primary" href="<?=base_url()?>index.php/products/view/<?=$p->id?>/<?=$p->name;?>">view <i class="ricon material-icons">&#xe417;</i></a></td>
                        <td><a class="btn btn-primary" href="<?=base_url()?>index.php/back/dispatch/<?=$r->uid?>/<?=$r->pid?>/<?=$r->status?>/">dispatch <i class="ricon material-icons">&#xe163;</i></a></td>
                        <?php } else{ ?>
                        <td colspan="8" style="color:red;">removed product</td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>



        <?php if ($irows) { ?>
        <br/>
        <p align="center">Arrived/dispatched orders</p>
        <div class="table-responsive" style="border-radius: 10px;box-shadow:0px 0px 10px 0px#80808080;">
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
                        <td style="text-align:center;"><a target="_blank" class="btn btn-primary" href="<?=base_url()?>index.php/products/view/<?=$r->id?>/<?=$r->name?>">view <i class="ricon material-icons">&#xe417;</i></a></td>
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

<script src="srcblock.js"></script>
</body>
</html>