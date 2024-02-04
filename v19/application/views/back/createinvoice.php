<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/ec.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<style type="text/css">
    a{
        color: blue !important;
    }
    #print{
        border: 0.5px solid gray;
        border-radius: 10px;
        padding: 50px;
    }
</style>
</head>
<body onload="def();">
<script type="text/javascript">
  var auto_refresh = setInterval(
    function()
    {
        if(invoid != ""){
            $('#contents').load('<?= base_url()?>index.php/back/loadinvoices/<?=$count?>').fadeIn("slow");
            $('#total').load('<?= base_url()?>index.php/back/invoicetotal/<?=$count?>').fadeIn("slow");

            // if($("#switch").prop("checked") == true){
                $('#gtotalg').load('<?= base_url()?>index.php/back/invoicetotal/<?=$count?>/gst').fadeIn("slow");
                // $("#gst").slideDown();
                $("#gst").load('<?= base_url()?>index.php/back/invoicetotal/<?=$count?>/sc').fadeIn("slow");
            // }
            // else if($("#switch").prop("checked") == false){
                $('#gtotaln').load('<?= base_url()?>index.php/back/invoicetotal/<?=$count?>').fadeIn("slow");
            // }
        }
    },750);
</script>

<div class="container fh f1">
    <p align="center">Create invoice <text style="color:orange;">(developing)</text></p>
<?php if($users){ ?>

    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for='sc'>Select customer</label>
        <select id='sc' class='form-control'>
            <option></option>
            <?php foreach($users as $r){ echo "
            <option value='".$r->id."'>".$r->username."</option>"; } ?>
        </select>
        <small class='form-text text-muted'>Select a customer</small>
        </div>
    </div>

    <div class="form-row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2 mb-3">
            <label for='pkg'>Select product</label>
            <?php if($products) { ?>
            <select id='pkg' class='form-control'>
                <option></option>
                <?php foreach($products as $r) { echo "
                <option value='".$r->id."'>".$r->name."</option>"; } ?>
            </select>
            <?php } else { echo "0 results"; } ?>
            <small class='form-text text-muted'>Select a product</small>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2 mb-3">
            <label for="pkgprice">Price</label>
            <input type="number" class="form-control" id="pkgprice" min='0' required>
            <small class='form-text text-muted'>Enter package price</small>
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-3">
            <label for='adpk'>&nbsp;</label>
            <button id='adpk' type='button' class='form-control btn btn-primary'>Add</button>
            <small class='form-text text-muted'>&nbsp;</small>
        </div>
    </div>

<!-- other expences strt -->

    <div class="form-row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2 mb-3">
            <label for='exp'>Other expences</label>
            <input type="text" id="exp" class='form-control' />
            <small class='form-text text-muted'>add other expences if</small>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2 mb-3">
            <label for='expamd'>price</label>
            <input type="number" id="expamd" class='form-control' min='0' />
            <small class='form-text text-muted'>enter amount</small>
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-3">
            <label for='adexp'>&nbsp;</label>
            <button id="adexp" type='button' class='form-control btn btn-primary'>Add</button>
            <small class='form-text text-muted'>&nbsp;</small>
        </div>
    </div>

<!-- other expences end -->

<div id="print">
    <table class="w-100">
        <tr>
            <td align="left">
                <h2><u>Invoice</u>
                    <text style="font-size: 18px;">#<text id=""><?=$count?></text></text>
                </h2>
            </td>
            <td width="25%">
                <img width="100%" src="<?= base_url()?>res/img/logo.png"/>
            </td>
        </tr>
        <tr>
            <td colspan='2'><hr style='border: 1px solid black;width:100%;'></hr></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td>
                <text class='f1'>
                <?php $adm = $this->session->userdata('user'); ?>
                <b>&nbsp;&nbsp;&nbsp;<u>From</u></b></br>
                <b>Company : Abc</b></br>
                <b>Phone : <?=$adm['phone']?></b></br>
                <b>Address : <?=$adm['address']?></b></br>
                <b>&nbsp;</b></br>
                <b>&nbsp;</b></br>
                <b>&nbsp;</b></br>
                </text>
            </td>
            <td align="right" id="name">
                
            </td>
        </tr>
    </table>

    <br/><br/>

    <div class='table-responsive'>
    <div width="100%" id="contents"></div>
    </div>

    <p align="right">
        <br/>
        Sub total : <text id="total"></text><br/>

        <div style="text-align:right;" id="tgst"><text id="gst"></text><br/></div>

        <p align="right">
            <b id="totaln" >Grand total : <text id="gtotaln"></text></b>
            <b id="totalg" >Grand total : <text id="gtotalg"></text></b>
        </p>
    </p>
</div>



<br/><br/>
<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

<table align="right">
    <tr>
        <td>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="switch" data="dis" onclick="gsttoggle(this);">
              <label style="font-weight:unset !important;" class="custom-control-label" for="switch" id="ss">Include GST</label>
            </div>
        </td>
        <td> &nbsp; </td>
        <td>
            <button onclick="print()" class='btn btn-primary'>print</button>
        </td>
        <td> &nbsp; </td>
        <td>
            <button id="save" class='btn btn-primary'>save</button>
        </td>
    </tr>
</table>

<?php } else{ echo "<p align='center'>0 customers</p>"; } ?>
</div>

<div id="h"></div>
<div id="invoid"></div><div id="lnk"></div>
<div id="saveinvo"></div><div id="reminvo"></div>
<br><br><br>
<script type="text/javascript">

function def(){
    // $("#totaln").show('slow');
    $("#totalg").hide('slow');

    $("#tgst").slideUp();
}
</script>
<script type="text/javascript">
function nam(){
	var n = $("#sc").val();
    $('#name').load('<?= base_url()?>index.php/back/getcus/' + n).fadeIn("slow");
}

$("#sc").change( nam );
nam();
</script>

<script type="text/javascript">
$(document).ready(function(){

  $("#adss").click(function(){
    if($("#srv").val() != "" && $('#sc').val() != "")
    {
        var cus = $('#sc').val();
        var sid = $('#srv').val();
        var srvprice = $("#srvprice").val();
        $('#h').load('<?=base_url()?>index.php/back/addinvo/s/' + cus + '/' + sid + '/' + 'sgst' + '/' + '<?=$count?>' + '/' + srvprice + '/a');
        $("#srv").val("");
        $("#srvprice").val("");
    }
    else
    {
        alert("fill the fields");
    }
  });

  $("#adpk").click(function(){
    if($("#pkg").val() != "" && $('#sc').val() != "")
    {
        var cus = $('#sc').val();
        var pid = $('#pkg').val();
        var pkgprice = $("#pkgprice").val();
        $('#h').load('<?=base_url()?>index.php/back/addinvo/p/' + cus + '/' + pid + '/' + 'pgst' + '/' + '<?=$count?>' + '/' + pkgprice + '/a');
        $("#pkg").val("");
        $("#pkgprice").val("");
    }
    else
    {
        alert("fill the fields");
    }
  });

  $("#adexp").click(function(){
    if($("#exp").val() != "")
    {
        var cus = $('#sc').val();
        var exp = $('#exp').val();
        var expamd = $('#expamd').val();
        $('#h').load('<?=base_url()?>index.php/back/addinvo/e/' + cus + '/' + exp + '/' + expamd + '/' + '<?=$count?>' + '/a');
        $("#exp").val("");
        $('#expamd').val("");
    }
    else
    {
        alert("fill the fields");
    }
  });

  $("#save").click(function(){
    var cus = $('#sc').val();
    var total = $('#total').val();
    if(cus !== "" && total !== '0')
    {
        var cus = $('#sc').val();
        var total = $("#total").html();
        $('#saveinvo').load('<?=base_url()?>index.php/back/saveinvoice/' + cus + '/' + total + '/' + '<?=$count?>' + '/' + 'a');
        alert("saved");
    }
    else
    {
        alert("empty fields");
    }
  });



  $("#switch").click(function(){
      if($("#switch").prop("checked") == true){

            $.ajax("<?= base_url()?>index.php/back/invoicetotal/<?=$count?>/gst").then(function(respons){
                $("#gtotal").empty();
                $("#gtotal").append(respons);
            })

            // $.ajax("<?= base_url()?>index.php/back/invoicetotal/<?=$count?>/sc").then(function(respons){
            //     $("#gst").empty();
            //     $("#gst").append(respons);
            // })

          $("#totaln").hide('slow');
          $("#totalg").show('slow');

          $("#tgst").slideDown();
          $("#ss").html("Exclude GST");

      }
      else if($("#switch").prop("checked") == false){

            // $.ajax("<?= base_url()?>index.php/back/invoicetotal/<?=$count?>").then(function(respons){
            //     $("#gtotal").empty();
            //     $("#gtotal").append(respons);
            // })

          $("#totaln").show('slow');
          $("#totalg").hide('slow');

          $("#tgst").slideUp();
          $("#ss").html("Include GST");

      }
  });



});
</script>
<script type="text/javascript">
function reminvo(x){
    $("#reminvo").load("<?=base_url()?>index.php/back/removeinvoice/" + x );
}
</script>
<script src="<?= base_url()?>res/js/printThis.js"></script>
<script>
    function print()
    {
        if($('#sc').val() !== "" && $('#total').val() !== '0')
        {
        $('.rm').css("display", "none");
        $('#print').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: '<style> .rm{ display:none !important; visibility:hidden !important; color:white !important;} a{color:white !important;} </style>',         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',                // path to additional css file - use an array [] for multiple
        pageTitle: 'invoices',              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: '*',  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 100,            // variable print delay
        header: 'Invoices',               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed
        });
        }
        else{
          alert("empty fields");
        }
    }
</script>
</body>
</html>