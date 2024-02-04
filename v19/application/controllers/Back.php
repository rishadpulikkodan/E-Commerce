<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		
		$user = $this->session->userdata('user');
		if($user && $user['privilege'] == array_keys(return_privilage())[0])  {
			$this->load->model('Model');
		}else{redirect('Adminlogin/index','refresh');}

	}

	public function index()
	{
		$this->load->view("back/index");
	}

	public function dashboard()
	{
		$this->load->view('back/dashboard');
	}

	public function analyz()
	{
		$uri = $this->uri->segment(3);
		if($uri == 'tt'){ echo $this->Model->gtanl("total"); }
		elseif($uri == 'wb'){ echo $this->Model->gtanl("wb"); }
		elseif($uri == 'fb'){ echo $this->Model->gtanl("fb"); }
		elseif($uri == 'gm'){ echo $this->Model->gtanl("gm"); }
		elseif($uri == 'ig'){ echo $this->Model->gtanl("ig"); }
		elseif($uri == 'wa'){ echo $this->Model->gtanl("wa"); }
		elseif($uri == 'ms'){ echo $this->Model->getcountwhere("messages",'status','0'); }
		elseif($uri == 'or'){ echo $this->Model->aordersc('carts','status','order','order_p'); }
		elseif($uri == 'pr'){ echo $this->Model->getcount("products"); }
		elseif($uri == 'ur'){ echo $this->Model->getcount("users"); }

		else { echo "-"; }
	}

	public function orders()
	{
		$data['rows'] = $this->Model->aorders('carts','status','order','order_p');
		$data['irows'] = $this->Model->aorders('carts','status','dispatched','arrived');
		$data['iirows'] = $this->Model->tablewhere('carts','status','order_w');
		$this->load->view('back/orders',$data);
	}

	public function dispatch()
	{
	    $uid = $this->uri->segment(3);
	    $pid = $this->uri->segment(4);
	    $stat = $this->uri->segment(5);
	    $row = $this->Model->getrowc('carts','uid',$uid,'pid',$pid,'status',$stat);

	    $array = [
	            'pid' => $pid,
	            'uid' => $uid,
	            'date' => $row->date,
	            'status' => 'dispatched'
	    ];
	    $res = $this->Model->modrow($row->id,'carts',$array);
	    if($res)
	    {
	        redirect(base_url().'index.php/back/orders');
	    }
	}

	public function messages()
	{
		$data['rows'] = $this->Model->table('messages');
		$this->load->view('back/messages',$data);
	}

	public function read()
	{
		if($this->Model->editrowa($this->uri->segment(3),'messages','status','1'))
		{ $this->messages(); }
	}

	public function stocks()
	{
		$data['rows'] = $this->Model->table('products');
		$this->load->view('back/stocks',$data);
	}

	public function addstock()
	{
		$data['rows'] = $this->Model->table("catogerys");
		$this->load->view('back/addstock',$data);
	}

	public function addtostock()
	{
		$formdata = [
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'info' => $this->input->post('info'),
			'type' => $this->input->post('type')
		];

		$r = $this->Model->insert("products",$formdata);
		if($r)
		{
            $file_name =$this->input->post('name').$r.".png";
            $file_tmp =$_FILES['image']['tmp_name'];

            if(move_uploaded_file($file_tmp,"res/images/".$file_name))
            {
				$total = count($_FILES['photo']['name']);
				for( $i=0 ; $i < $total ; $i++ )
				{
					$tmpFilePath = $_FILES['photo']['tmp_name'][$i];
					if ($tmpFilePath != "")
					{
						$newFilePath = "./res/gallery/".$r."-".$i."-".$this->input->post('name').".png";
						if(move_uploaded_file($tmpFilePath, $newFilePath))
						{
							$file = $_FILES['photo']['name'][$i];

							$data = [
								'pid' => $r,
								'name' => $r."-".$i."-".$this->input->post('name').".png"
							];
							$res = $this->Model->insert("gallery",$data);
						}
					}
				}
				$formdata['id'] = $r;
				$this->load->view('back/submitted',$formdata);
            }
		}
		// else{
		// 	echo "Insert failed : check you entered datas ( ege change file name to upload ) / Contact developer";
		// }
	}

	public function addcatogery()
	{
		$data['rows'] = $this->Model->table('catogerys');
		$this->load->view('back/addcatogery',$data);
	}

	public function addtocatogery()
	{
		if($this->Model->checkrowa('catogerys','name',$this->input->post('name')))
		{
			$data['msg'] = 'Already exist';
			$data['rows'] = $this->Model->table('catogerys');
			$this->load->view('back/addcatogery',$data);
		}
		elseif($this->Model->insert('catogerys',$this->input->post()))
		{
			$data['rows'] = $this->Model->table('catogerys');
			$this->load->view('back/addcatogery',$data);
		}
	}

	public function catogerys()
	{
		$rows = $this->Model->table('catogerys');
		if($rows) {
        foreach ($rows as $r) { ?>

      <div class="list-group-item list-group-item-action" style="height:65px;">
          <button style="
            outline: none;
            border: none;
            background: none;
            height: 100%;
          ">
            <text><?=$r->name?> </text>
            <span class="badge badge-primary badge-pill">00</span>
          </button>
          <p style="float:right;margin-bottom: auto;"> &nbsp;
            <button id="<?=$r->id?>" class="btn btn-warning">edit</button>
            <button id="<?=$r->id?>" class="btn btn-danger">delete</button>
          </p>
      </div>

      <?php } } else { echo"<p align='center'>0 results</p>"; } 
	}

	public function editcatogeryview()
	{
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		$data['row'] = $this->Model->getrow($id,'catogerys');
		$this->load->view('back/editcatogery',$data);
	}

	public function editcatogery()
	{

	}

	public function catogeryedit()
	{
		$id = $this->uri->segment(3);
		$oname = $this->Model->getrow($id,'catogerys')->name;
		$nname = $this->input->post('name');
		if($this->Model->editrow($id,'name',$oname,'catogerys',$nname)) 
		{
			$data['rows'] = $this->Model->table('catogerys');
			$this->load->view('back/addcatogery',$data);
		}
	}

	public function dlcataler()
	{
		$data['id'] = $this->uri->segment(3);
		$data['name'] = $this->uri->segment(4);
		$this->load->view('back/dlcataler',$data);
	}

	public function dltcat()
	{
		$id = $this->uri->segment(3);
		$name = $this->uri->segment(4);
		if($this->Model->remrow('catogerys',$id)){
			$data['rows'] = $this->Model->table('catogerys');
			$this->load->view('back/addcatogery',$data);
		}
	}

	public function view()
	{
		$id = $this->uri->segment(3);

		echo "
		<div style='float: right;
		    margin-right: 10px;
		    top: 0px;
		    right: 0px;
		    position: sticky;'>
		<button class='btn btn-danger' onclick='hdalert();'><i style='font-size:14px;' class='material-icons'>&#xe5cd;</i></button>
		</div>
		<br/>
		<br/>
		";

		$rows = $this->Model->tablewhere("gallery","pid",$id);
		if ($rows) {
			foreach ($rows as $r) {
				echo "<img style='width:50%;' id='".$r->pid."' src='".base_url()."/res/gallery/".$r->name."' /><br/><br/>";
			}
		}
		else{
			echo "<p align='center'>0 results</p>
				  <text>tumb img only</text>";
		}

	}

	public function editview()
	{
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		$data['row'] = $this->Model->getrow($id,'products');
		$data['rowsg'] = $this->Model->tablewhere("gallery","pid",$id);
		$data['rowsc'] = $this->Model->table("catogerys");
		$this->load->view('back/editview',$data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$oname = $this->uri->segment(4);
		$formdata = [
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'info' => $this->input->post('info'),
			'type' => $this->input->post('type')
		];
		if($this->Model->modrow($id,'products',$formdata))
		{
			$data['rows'] = $this->Model->table("products");
			if($oname != $this->input->post('name'))
			{
				rename('res/images/'.$oname.$id.'.png', 'res/images/'.$this->input->post('name').$id.'.png');
			}
			$data['msg'] = "Successfully modified ".$this->input->post('name')." !";
			$this->load->view('back/stocks',$data);
		}
	}

	public function removealert()
	{
		$id = $this->uri->segment(3);
		$row = $this->Model->getrow($id,'products');
		?>
      <div class='img' style='
      background:url("<?=base_url()?>res/images/<?=$row->name.$row->id?>.png");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;

      width:25vh;
      height:25vh;
      border-radius:10px;'></div>

	<div style='
	    margin-left: 26vh;
	    position: fixed;
	    top: 0px;
	    font-weight: normal;
	    margin-top: 10px;
	    width: -webkit-fill-available;
    	text-align: center;
	'>
	<h5>Are you sure want to delete.?</h5>
	<h6><?=$row->name." ".$row->price?></h6>
	<text><?=$row->info?></text>
	</div>

		<button class='act btn btn-light' onclick='hdalert();'>Cancel</button>
		<button class='act btn btn-warning' onclick='remove(this.id);' id='<?=$row->id?>'>Yes</button>
		<?php
	}

	public function remove()
	{
		$id = $this->uri->segment(3);

		$row = $this->Model->getrow($id,"products");
		unlink("res/images/".$row->name.$row->id.".png");
		if($this->Model->remrow('products',$id))
		{
			$rows = $this->Model->tablewhere("gallery","pid",$id);
			if($rows){
				foreach ($rows as $r) {
					unlink("res/gallery/".$r->name."");
				}
				$this->Model->dltimgs($id);
			}
			echo $id;
		}
	}

// -----WEB FRONT HOME START-----

	public function home()
	{
		$data['row'] = $this->Model->getrow(0,'analyz');
		$this->load->view('back/home',$data);
	}

	public function updateevent()
	{
		if($this->Model->getrow(0,'analyz')->event != "0"){
			unlink("res/event/".$this->Model->getrow(0,'analyz')->event);
		}
		$tmpFilePath = $_FILES['photo']['tmp_name'];
		if ($tmpFilePath != "")
		{
			$newFilePath = "./res/event/".$_FILES['photo']['name'];
			if(move_uploaded_file($tmpFilePath, $newFilePath)){
				if($this->Model->editrowa(0,'analyz','event',$_FILES['photo']['name'])){
					$this->home();
				}
			}
		}
	}

	public function updatevideo()
	{
		if($this->Model->getrow(0,'analyz')->video != "0"){
			unlink("res/event/".$this->Model->getrow(0,'analyz')->video);
		}
		$tmpFilePath = $_FILES['video']['tmp_name'];
		if ($tmpFilePath != "")
		{
			$newFilePath = "./res/event/".$_FILES['video']['name'];
			if(move_uploaded_file($tmpFilePath, $newFilePath)){
				if($this->Model->editrowa(0,'analyz','video',$_FILES['video']['name'])){
					$this->home();
				}
			}
		}
	}

	public function remevent()
	{
		$event = $this->uri->segment(3);
		unlink("res/event/".$event);
		if($this->Model->editrowa(0,'analyz','event','0')){
			$this->home();
		}
	}

	public function remvideo()
	{
		$event = $this->uri->segment(3);
		unlink("res/event/".$event);
		if($this->Model->editrowa(0,'analyz','video','0')){
			$this->home();
		}
	}

	public function about()
	{
		$data['row'] = $this->Model->getrow(0,'analyz');
		$this->load->view('back/about',$data);
	}

	public function aboutedit()
	{
		$this->Model->editrowa(0,'analyz','about',$this->input->post('about'));
		$data['msg'] = 'Saved';
		$data['row'] = $this->Model->getrow(0,'analyz');
		$this->load->view('back/about',$data);
	}

	public function posts()
	{
		$data['rows'] = $this->Model->table('posts');
		$this->load->view('back/posts',$data);
	}

	public function addpost()
	{
		$this->load->view('back/addpost');
	}

	public function uploadpost()
	{
				$total = count($_FILES['photo']['name']);
				for( $i=0 ; $i < $total ; $i++ )
				{
					$tmpFilePath = $_FILES['photo']['tmp_name'][$i];
					if ($tmpFilePath != "")
					{
						$newFilePath = "./res/posts/".$_FILES['photo']['name'][$i];
						if(move_uploaded_file($tmpFilePath, $newFilePath))
						{
							$data = [
								'filename' => $_FILES['photo']['name'][$i]
							];
							$res = $this->Model->insert("posts",$data);
						}
					}
				}
				$data['rows'] = $this->Model->table('posts');
				$this->load->view('back/posts',$data);
	}

	public function postremovealert()
	{
		$id = $this->uri->segment(3);
		$row = $this->Model->getrow($id,'posts');
		?>
      <div class='img' style='
      background:url("<?=base_url()?>res/posts/<?=$row->filename?>");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;

      width:25vh;
      height:25vh;
      border-radius:10px;'></div>

	<div style='
	    margin-left: 26vh;
	    position: fixed;
	    top: 0px;
	    font-weight: normal;
	    margin-top: 10px;
	    width: -webkit-fill-available;
    	text-align: center;
	'>
	<h5>Are you sure want to delete.?</h5>
	<text><?=$row->filename?></text>
	</div>

		<button class='act btn btn-light' onclick='hdalert();'>Cancel</button>
		<button class='act btn btn-warning' onclick='remove(this.id);' id='<?=$row->id?>'>Yes</button>
		<?php
	}

	public function removepost()
	{
		$id = $this->uri->segment(3);
		$row = $this->Model->getrow($id,"posts");
		unlink("res/posts/".$row->filename);
		if($this->Model->remrow('posts',$id))
		{
			echo $id;
		}
	}

	public function branches()
	{
		$data['rows'] = $this->Model->table('branches');
		$this->load->view('back/branches',$data);
	}

	public function addbranch()
	{
		$this->load->view('back/addbranch');
	}

	public function insertbranch()
	{
		if($this->Model->insert('branches',$this->input->post()))
		{ $this->branches(); }
	}

	public function branchremovealert()
	{
		$id = $this->uri->segment(3);
		$row = $this->Model->getrow($id,'branches');
		?>
      <div class='img' style='
      background:url("");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;

      width:25vh;
      height:25vh;
      border-radius:10px;'></div>
	<div style='
	    margin-left: 26vh;
	    position: fixed;
	    top: 0px;
	    font-weight: normal;
	    margin-top: 10px;
	    width: -webkit-fill-available;
    	text-align: center;
	'>
	<h5>Are you sure want to delete.?</h5>
	<h4><?=$row->name?></h4>
	</div>

		<button class='act btn btn-light' onclick='hdalert();'>Cancel</button>
		<button class='act btn btn-warning' onclick='remove(this.id);' id='<?=$row->id?>'>Yes</button>
		<?php
	}

	public function removebranch()
	{
		$id = $this->uri->segment(3);
		if($this->Model->remrow('branches',$id))
		{
			echo $id;
		}
	}

// -----WEB FRONT HOME END-----

// -----INVOICE START-----

	public function createinvoice()
	{
		$data['users'] = $this->Model->table('users');
		$data['products'] = $this->Model->table('products');
		$count = $this->Model->invocount();
		if($count)
		{
			foreach ($count as $r)
			{
				$c = $r->count;
				$inc = $c + 1;
				$res = $this->Model->inc($r->count,$inc);
				$data['count'] = $inc;
				$this->load->view('back/createinvoice',$data);
			}
		}
	}

	public function addinvo()
	{
			$ur = $this->uri->segment(3);
			if($ur == "p")
			{
				$id = $this->uri->segment(5);
				$gst = $this->uri->segment(6);
				$pkg = $this->Model->getrow($id,'products');
				if($pkg)
				{
				$array = [
		            'cus_id' => $this->uri->segment(4),
		            'type' => "package",
		            'name' => $pkg->name,
		            // 'price' => $pkg->price,
		            'price' => $this->uri->segment(8),
		            'invo_id' => $this->uri->segment(7)
		        ];
		        $this->Model->insert("invoices_details",$array);
				}
			}
			elseif($ur == "s")
			{
				$id = $this->uri->segment(5);
				$gst = $this->uri->segment(6);
				$srv = $this->Model->getsn($id);
				if($srv)
				{
				$array = [
		            'cus_id' => $this->uri->segment(4),
		            'type' => "service",
		            'name' => $srv->name,
		            // 'price' => $srv->price,
		            'price' => $this->uri->segment(8),
		            'invo_id' => $this->uri->segment(7)
		        ];
		        $this->Model->insert("invoices_details",$array);
				}
			}
			elseif($ur == "e")
			{
				$array = [
		            'cus_id' => $this->uri->segment(4),
		            'type' => "expence",
		            'name' => $this->uri->segment(5),
		            'price' => $this->uri->segment(6),
		            'invo_id' => $this->uri->segment(7)
		        ];
		        $this->Model->insert("invoices_details",$array);
			}

	}

	public function getcus()
	{
		$id = $this->uri->segment(3);
		if($id)
		{

			$u = $this->Model->getrow($id,'users');
			if($u)
			{
				echo "<text class='f1'>
				<b>&nbsp;&nbsp;&nbsp;<u>To</u></br>
				<b>Name : </b>".$u->username."</br>
				<b>id : </b>".$u->id."</br>
				<b>date : </b>".date("d-m-Y")."</br>
				<b>Phone : </b>".$u->phone."</br>
				<b>Address : </b>".$u->address."</br>
				</text>
				";
			}
		}
	}

	public function loadinvoices()
	{
		$count = $this->uri->segment(3);
		$rows = $this->Model->tablewhere('invoices_details','invo_id',$count);

		if($rows){
        echo "
        <table class='table table-bordered table-sm table-hover' style='white-space:nowrap;'>
		<thead>
        <tr>
            <th scope='col'>Service name</th>
            <th scope='col'>Type</th>
            <th align='right' scope='col'>Price</th>
            <th scope='col' class='rm'></th>
        </tr>
        </thead>";
        foreach($rows as $r)
        {
        	echo"
        	<tr>
        		<td>".$r->name."</td>
        		<td>".$r->type."</td>
        		<td align='right'>".$r->price."</td>
        		<td align='right' class='rm'>"; ?> <button class='rmo btn btn-primary' onclick="reminvo('<?=$r->id?>')">remove</button> <?php echo"</td>
        	</tr>
        	";
        }
    	}
	}

	public function removeinvoice()
	{
		$id = $this->uri->segment(3);
		$this->Model->remrow('invoices_details',$id);
	}

	public function invoicetotal()
	{
			if($this->uri->segment(4) == "gst"){
				$id = $this->uri->segment(3);
				$rows = $this->Model->tablewhere('invoices_details','invo_id',$id);
				$t = 0;
				foreach($rows as $r){ $t = $t + $r->price; }
				$gst = $t * 18 / 100;
				$gtotal = $t + $gst;
				echo $gtotal;
			}
			elseif($this->uri->segment(4) == "sc")
			{
				$id = $this->uri->segment(3);
				$rows = $this->Model->tablewhere('invoices_details','invo_id',$id);
				$t = 0;
				foreach($rows as $r){ $t = $t + $r->price; }
				$gst = $t * 18 / 100;
				$sgst = $gst / 2;
				echo"<br/>
		            SGST : ".$sgst."<br/>
		            CGST : ".$sgst."<br/>";
			}
			else{
				$id = $this->uri->segment(3);
				$rows = $this->Model->tablewhere('invoices_details','invo_id',$id);
				$t = 0;
				foreach($rows as $r){ $t = $t + $r->price; }
				echo $t;
			}
	}

// -----INVOICE END----- 

	public function editpass()
	{
		$data['row'] = $this->Model->getrow($this->session->userdata('user')['id'],'users');
		$this->load->view('back/editpass',$data);
	}

	public function passedit()
	{
		$id = $this->session->userdata('user')['id'];
		$op = $this->input->post('op');
		$np = $this->input->post('np');
		$cnp = $this->input->post('cnp');
		$row = $this->Model->getrow($id,'users');
		$data['row'] = $row;
		if (password_verify($op, $row->password)) {
			if ($np == $cnp) {
				$this->Model->editrowa($id,'users','password',password_hash($cnp, PASSWORD_DEFAULT));
				$this->session->sess_destroy();
				?>
				<script type='text/javascript'>
				parent.window.location.reload();
				</script>
				<?php
			}
			else{
				$data['msg'] = "New password not mach";
				$this->load->view('back/editpass',$data);
			}
		}
		else{
			$data['msg'] = "Old password not mach";
			$this->load->view('back/editpass',$data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home','refresh');
	}


}
