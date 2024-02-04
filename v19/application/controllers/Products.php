<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
    error_reporting(0);
		$this->load->model('Model');
	}

	public function index()
	{
        if($this->session->userdata('view')){ }
        else{ $this->Model->analyz('wb'); }
        $data['rows'] = $this->Model->table("catogerys");
        $data['thi'] = "none";
        $this->load->view('products',$data);
	}

    public function favorites()
    {$user = $this->session->userdata('user');
        if($user && $user['privilege'] == array_keys(return_privilage())[1]){
          $data['rows'] = $this->Model->table("catogerys");
          $data['thi'] = "favs";
          $this->load->view('products',$data);
        }
        else{
            redirect('login');
        }
    }

    public function carts()
    {$user = $this->session->userdata('user');
        if($user && $user['privilege'] == array_keys(return_privilage())[1]){
          $data['rows'] = $this->Model->table("catogerys");
          $data['thi'] = "carts";
          $this->load->view('products',$data);
        }
        else{
            redirect('login');
        }
    }

    public function products()
    {
        $cat = $this->uri->segment(3);
        if($cat == 'search'){
            if($this->uri->segment(4) == ''){
              exit();
            }
            else{
              $rows = $this->Model->search('products','name',$this->uri->segment(4));
            }
        }
        elseif ($cat == 'none') {
            $rows = $this->Model->table('products');
        }
        elseif($cat == 'favs'){
            $rows = $this->Model->favs();
            $rmv = 'rmvf';
        }
        elseif($cat == 'carts'){
            $rows = $this->Model->carts();
            $rmv = 'rmvc';
        }
        else{
            $rows = $this->Model->tablewhere('products','type',$cat);
        }
        if($rows){
              if($this->uri->segment(3) == 'search'){
                ?><p style="width:100%;color:green;" align="center">Search results</p><?php
              }
              if (isset($rmv)) { ?>
              <p style="width:inherit;" align="center">
                <?php if ($rmv == 'rmvf') { echo "Favorites"; } else { echo "Carts"; } ?>
              </p>
              <?php }
            foreach ($rows as $r) { ?>
  <div <?php if(isset($rmv)){ ?> id="<?=$r->id."rmv";?>"<?php }?> class="col-6 col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 myc">
    <div class="icol">
      <div class="img" style="
      background: url('<?=base_url()?>res/images/<?php echo $r->name.$r->id;?>.png');
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;">
      <?php if($this->session->userdata('user') && $this->session->userdata('user')['privilege'] == array_keys(return_privilage())[1]) { 
$uid = $this->session->userdata('user')['id'];
$pid = $r->id;
$res = $this->Model->checkrowb('favs','uid',$uid,'pid',$pid);
if(isset($rmv) && $rmv == 'rmvc'){ ?>

    <button style="height:unset !important;" id="<?=$r->id?>c" onclick="remfrmcartd(this,'<?=$r->id?>r');" class="cart" title="remove from cart">
      <i style="color:blue;" class="f1 ricon material-icons">&#xe8cc;</i>
    </button>

<?php } else{ 
if ($res) { ?>
<button id="<?=$r->id?>a" onclick="<?php if(isset($rmv) && $rmv == 'rmvf'){ ?>remfrmfavd(this,'<?=$r->id?>d');<?php } else{ ?>remfrmfav(this,'<?=$r->id?>d');<?php } ?>" class="fvrbtn" title="remove from favorites">
  <i style="color:red;" class="fvr material-icons">&#xe87d;</i>
</button>
<button style="display:none;" id="<?=$r->id?>d" onclick="addtofav(this,'<?=$r->id?>a')" class="fvrbtn" title="Add to favorites">
  <i class="fvr material-icons">&#xe87e;</i>
</button>
<?php } else { ?>
<button id="<?=$r->id?>d" onclick="addtofav(this,'<?=$r->id?>a');" class="fvrbtn" title="Add to favorites">
  <i class="fvr material-icons">&#xe87e;</i>
</button>
<button style="display:none;" id="<?=$r->id?>a" onclick="<?php if(isset($rmv) && $rmv == 'rmvf'){ ?>remfrmfavd(this,'<?=$r->id?>d');<?php } else{ ?>remfrmfav(this,'<?=$r->id?>d');<?php } ?>" class="fvrbtn" title="remove from favorites">
  <i style="color:red;" class="fvr material-icons">&#xe87d;</i>
</button>

      <?php } } } else{ ?>
      <button onclick="login();" class="fvrbtn" title="LogIn to Add to favorites">
        <i class="fvr material-icons">&#xe87e;</i>
      </button>
      <?php } ?>
      <a onclick="progresson();" title="View" href="<?=base_url()?>products/view/<?=$r->id?>/<?=$r->name?>">
        <div style="width:100%;height:100%;"></div>
      </a>
      </div>
      <div style="width:100%;height:25%;">
      <a title="View" href="<?=base_url()?>products/view/<?=$r->id?>/<?=$r->name?>">
      <button class="info"><p><?=$r->name?><br/>Rs : <?=$r->price?></p></button>
      </a>
      <?php if($this->session->userdata('user') && $this->session->userdata('user')['privilege'] == array_keys(return_privilage())[1]) { 
$res = $this->Model->checkrowc('carts','uid',$uid,'pid',$pid,'status','cart');
if(isset($rmv) && $rmv == 'rmvc'){ ?>

    <button id="<?=$r->id?>c" onclick="order(this,'<?=$r->id?>r');" class="cart" title="order">
      <i style="color:blue;" class="f1 ricon material-icons">&#xe558;</i>
    </button>

<?php } else{ 
if ($res) { ?>
<button id="<?=$r->id?>c" onclick="<?php if(isset($rmv) && $rmv == 'rmvc'){ ?>remfrmcartd(this,'<?=$r->id?>r');<?php } else{ ?>remfrmcart(this,'<?=$r->id?>r');<?php } ?>" class="cart" title="remove from cart">
  <i style="color:blue;" class="f1 ricon material-icons">&#xe8cc;</i>
</button>
<button style="display:none;" id="<?=$r->id?>r" onclick="addtocart(this,'<?=$r->id?>c')" class="cart" title="Add to cart">
  <i class="f1 ricon material-icons">&#xe8cc;</i>
</button>
<?php }else{ ?>
<button id="<?=$r->id?>r" onclick="addtocart(this,'<?=$r->id?>c');" class="cart" title="Add to cart">
  <i class="f1 ricon material-icons">&#xe8cc;</i>
</button>
<button style="display:none;" id="<?=$r->id?>c" onclick="<?php if(isset($rmv) && $rmv == 'rmvc'){ ?>remfrmcartd(this,'<?=$r->id?>r');<?php } else{ ?>remfrmcart(this,'<?=$r->id?>r');<?php } ?>" class="cart" title="remove from cart">
  <i style="color:blue;" class="f1 ricon material-icons">&#xe8cc;</i>
</button>
      <?php } } } else{ ?>
      <button onclick="login();" title="LogIn to Add to cart" class="cart"><i class="f1 ricon material-icons">&#xe8cc;</i></button>
      <?php } ?>
      </div>
    </div>
  </div>
            <?php } if(isset($rmv) && $rmv == 'rmvc'){ ?>
        <div style="
          text-align: center;
          height: 100px;
          width: 100%;
          position: sticky;
          bottom: -50px;
          margin-top: 30px;
          border-radius: 10px;
          background: #80808080;
          color: white;
    	  text-shadow: 0px 0px 5px black;
    	  backdrop-filter:blur(10px);
          ">
          <button onclick="window.location.href = '<?=base_url()?>products/buyall';" style="border-radius:100px;margin-top:5px;" class="btn btn-primary">
            <i style="margin:0;padding:0;font-size:20px;" class='fas'>&#xf48b;</i> Buy all</button>
          <text style="
          position: absolute;
          top: 0px;
          left: 0px;
          ">Total Rs: <text id="total"></text><br/>
          Items : <text id="items"></text>
          </text>
        </div>
        <?php
        } }
        else{
            ?><p style="width:100%;" align="center">0 results</p><?php
        }
    }

  public function addtofav()
  {
    $user = $this->session->userdata('user');
    if($this->Model->checkrowb('favs','pid',$this->uri->segment(3),'uid',$user['id'])){
      
    }
    else{
      $array = [
              'pid' => $this->uri->segment(3),
              'uid' => $user['id']
      ];
      $res = $this->Model->insert("favs",$array);
      if($res){ echo "1"; }
    }
  }

  public function remfrmfav()
  {
    $user = $this->session->userdata('user');

    $pid = $this->uri->segment(3);
    $uid = $user['id'];

    $res = $this->Model->remfrmfav($pid,$uid);
    if($res){ echo "1"; }
  }

  public function addtocart()
  {
    $user = $this->session->userdata('user');
    // if($this->Model->checkrowb('carts','pid',$this->uri->segment(3),'uid',$user['id'])){
    //   echo "o";
    // }
    // else{
      $array = [
              'pid' => $this->uri->segment(3),
              'uid' => $user['id'],
              'status' => 'cart'
      ];
      $res = $this->Model->insert("carts",$array);
      if($res){ echo "1"; }
    // }
  }

  public function remfrmcart()
  {
    $user = $this->session->userdata('user');

    $pid = $this->uri->segment(3);
    $uid = $user['id'];

    $res = $this->Model->remfrmcart($pid,$uid);
    if($res){ echo "1"; }
  }

  public function analyz()
  { $user = $this->session->userdata('user');

    $ur = $this->uri->segment(3);
    $uid = $user['id'];
    if($ur == 'ors'){ echo $this->Model->getcountwhereb('carts','uid',$uid,'status','order'); }
    elseif($ur == 'cart'){ echo $this->Model->getcountwhereb('carts','uid',$uid,'status','cart'); }
    elseif($ur == 'fav'){ echo $this->Model->getcountwhere('favs','uid',$uid); }
    elseif($ur == 'tot'){ echo $this->Model->total(); }
    elseif($ur == 'itms'){ echo $this->Model->getcountwhereb('carts','uid',$uid,'status','cart'); }
    else { echo "-"; }
  }

  public function buy()
  {
      $uid = $this->session->userdata('user')['id'];
      $pid = $this->uri->segment(3);
      $row = $this->Model->getrowc('carts','uid',$uid,'pid',$pid,'status','cart');
      $array = [
              'pid' => $pid,
              'uid' => $uid,
              'date' => date('d-F-Y'),
              'status' => 'order'
      ];
      $res = $this->Model->modrow($row->id,'carts',$array);
      if($res)
      {
          $u = $this->Model->getrow($uid,'users');
          if(empty($u->name) && $u->phone == 0 && empty($u->place) && empty($u->address))
          {
              echo "0";
          }
          else{
              echo "1";
          }
      }
  }

  public function buyall()
  { $user = $this->session->userdata('user');

      $uid = $user['id'];
      $rows = $this->Model->tablewhereb('carts','uid',$uid,'status','cart');
      foreach ($rows as $r) {
          $this->Model->editrowb($r->id,'status',$r->status,'carts','order','date',date('d-F-Y'));
      }
      $u = $this->Model->getrow($uid,'users');
      if(empty($u->name) && $u->phone == 0 && empty($u->place) && empty($u->address))
      {
          $data['msg'] = 'fill details';
          $this->load->view('profile',$data);
      }
      else{
          $this->orders();
      }
  }

  	public function orders()
  	{ $user = $this->session->userdata('user');
        if($user){
            $data['rows'] = $this->Model->orders($user['id']);
            $data['irows'] = $this->Model->ordersa($user['id']);
            $this->load->view('orders',$data);
        }
        else{
            redirect('login');
        }
  	}

    public function pay()
    {
        $pid = $this->uri->segment(3);
        if ($pid == 'all') {
            
        }
        else{
            $uid = $this->session->userdata('user')['id'];
            $row = $this->Model->getrowc('carts','uid',$uid,'pid',$pid,'status','order');
            $array = [
                    'pid' => $pid,
                    'uid' => $uid,
                    'status' => 'order_p'
            ];
            $res = $this->Model->modrow($row->id,'carts',$array);
            if($res){ echo "1"; }
        }
    }

    public function arrived()
    {
        $uid = $this->uri->segment(3);
        $pid = $this->uri->segment(4);
        $stat = $this->uri->segment(5);
        $row = $this->Model->getrowc('carts','uid',$uid,'pid',$pid,'status',$stat);
        $array = [
                'pid' => $pid,
                'uid' => $uid,
                'date' => $row->date,
                'status' => 'arrived'
        ];
        $res = $this->Model->modrow($row->id,'carts',$array);
        if($res)
        {
            $this->orders();
        }
    }

// -----VIEW_START-----

    public function view()
    {
        $id = $this->uri->segment(3);
        if($this->Model->getrow($id,'products')){
            $data['row'] = $this->Model->getrow($id,'products');
            $data['rows'] = $this->Model->tablewhere("gallery","pid",$id);
            $this->load->view('view',$data);
        }
        else{
            redirect(base_url().'products');
        }
    }

    public function whatsapp()
    {
        $user = $this->session->userdata('user');
        if($user){ $uid = $user['id']; }
        else{ $uid = '-0'; }
        $array = [
                'pid' => $this->uri->segment(3),
                'uid' => $uid,
                'date' => date('d-F-Y'),
                'status' => 'order_w'
        ];
        $res = $this->Model->insert('carts',$array);
        if($res)
        {
            echo "1";
        }
    }

    public function order()
    { $user = $this->session->userdata('user');
        if($user){
            $uid = $this->session->userdata('user')['id'];
            $pid = $this->uri->segment(3);
            $array = [
                    'pid' => $pid,
                    'uid' => $uid,
                    'date' => date('d-F-Y'),
                    'status' => 'order'
            ];
            $res = $this->Model->insert('carts',$array);
            if($res)
            {
                $u = $this->Model->getrow($uid,'users');
                if(empty($u->name) && $u->phone == 0 && empty($u->place) && empty($u->address))
                {
                    redirect(base_url().'profile');
                }
                else{
                    $this->orders();
                }
            }
        }
        else{
            redirect('login');
        }
    }

  public function addtocarts()
  {
    $user = $this->session->userdata('user');
    // if($this->Model->checkrowb('carts','pid',$this->uri->segment(3),'uid',$user['id'])){
    //   echo "o";
    // }
    // else{
      $array = [
              'pid' => $this->uri->segment(3),
              'uid' => $user['id'],
              'status' => 'cart'
      ];
      $res = $this->Model->insert("carts",$array);
      if($res){ $this->carts(); }
    // }
  }

    public function addtofavs()
    {
        $user = $this->session->userdata('user');
        $array = [
                'pid' => $this->uri->segment(3),
                'uid' => $user['id']
        ];
        $res = $this->Model->insert("favs",$array);
        if($res){ $this->favorites(); }
    }

// -----VIEW_END-----



}