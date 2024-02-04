<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function login()
    {
        $result = $this->db->select('*')
        ->from('users')
        ->where('username', $this->input->post('username'))
        ->limit(1)
        ->get();

        if($result->num_rows() < 1){
            return false;
        }
        elseif(password_verify($this->input->post('password'), $result->result()[0]->password)){
            $user = [ 'id' => $result->result()[0]->id,
                      'privilege' => $result->result()[0]->privilege,
                      'username' => $result->result()[0]->username,
                      'name' => $result->result()[0]->name,
                      'phone' => $result->result()[0]->phone,
                      'place' => $result->result()[0]->place,
                      'address' => $result->result()[0]->address
            ];
            $this->session->set_userdata('user', $user);
            return true;
        }
        else{
            return false;
        }
    }

    public function check()
    {
        $result = $this->db->select('*')
        ->from('users')
        ->where('username', $this->input->post('username'))
        ->limit(1)
        ->get();

        if($result->num_rows() < 1){
            return true;
        }
        elseif($this->input->post('username') == $result->result()[0]->username){
            return false;
        }
        else{
            return true;
        }
    }

    public function insert($table,$data)
    {
        $this->db->set($data);
        if($this->db->insert($table,$data))
        {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }
        else
        {
            $status = "can't get id";
            return $status;
        }
    }

    public function table($table)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->get()->result();
    }

    public function tablelimit($table,$l)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->limit($l)
        ->get()->result();
    }

    public function tabl($table)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->get()->result();
    }

    public function tablewhere($table,$col,$val)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->where($col,$val)
        ->get()->result();
    }

    public function tablewhereb($table,$cola,$vala,$colb,$valb)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->where($cola,$vala)
        ->where($colb,$valb)
        ->get()->result();
    }

    public function checkrowa($table,$caola,$vala)
    {
        return $this->db->select('*')
        ->from($table)
        ->where($caola,$vala)
        ->get()->row();
    }

    public function checkrowb($table,$caola,$vala,$caolb,$valb)
    {
        return $this->db->select('*')
        ->from($table)
        ->where($caola,$vala)
        ->where($caolb,$valb)
        ->get()->row();
    }

    public function checkrowc($table,$caola,$vala,$caolb,$valb,$caolc,$valc)
    {
        return $this->db->select('*')
        ->from($table)
        ->where($caola,$vala)
        ->where($caolb,$valb)
        ->where($caolc,$valc)
        ->get()->row();
    }

    public function getrow($id,$table)
    {
        return $this->db->select('*')
        ->from($table)
        ->where('id',$id)
        ->get()->row();
    }

    public function getrowc($table,$cola,$vala,$colb,$valb,$colc,$valc)
    {
        return $this->db->select('*')
        ->from($table)
        ->where($cola,$vala)
        ->where($colb,$valb)
        ->where($colc,$valc)
        ->get()->row();
    }

    public function modrow($id,$table,$formdata)
    {
        $this->db->where('id',$id);
        $this->db->update($table,$formdata);
        return TRUE;
    }

    public function editrow($id,$scol,$soval,$table,$nvaldata)
    {
        $this->db->where('id',$id);
        $this->db->where($scol,$soval);
        $this->db->set($scol,$nvaldata);
        $this->db->update($table);
        return TRUE;
    }

    public function editrowa($id,$table,$col,$val)
    {
        $this->db->where('id',$id);
        $this->db->set($col,$val);
        $this->db->update($table);
        return TRUE;
    }

    public function editrowb($id,$scol,$soval,$table,$nvaldata,$scolb,$nvaldatab)
    {
        $this->db->where('id',$id);
        $this->db->where($scol,$soval);
        $this->db->set($scol,$nvaldata);
        $this->db->set($scolb,$nvaldatab);
        $this->db->update($table);
        return TRUE;
    }

    public function remrow($table,$id)
    {
        $this->db->where('id',$id);
        $this->db->delete($table);
        return TRUE;
    }

    public function search($table,$col,$val)
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from($table)
        ->like($col,$val,'both')
        ->get()->result();
    }

    public function dltimgs($id)
    {
        $this->db->where('pid',$id);
        $this->db->delete("gallery");
        return TRUE;
    }

    public function products()
    {
        return $this->db->order_by("id","desc")
        ->select('*')
        ->from("products")
        ->get()->result();
    }

    public function aorders($table,$cola,$vala,$valb)
    {
        $this->db->order_by("carts.id","desc");
        $this->db->select('*');
        $this->db->from($table);
        $this->db->or_where($cola,$vala);
        $this->db->or_where($cola,$valb);
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->result();
    }

    public function aordersc($table,$cola,$vala,$valb)
    {
        $this->db->order_by("carts.id","desc");
        $this->db->select('*');
        $this->db->from($table);
        $this->db->or_where($cola,$vala);
        $this->db->or_where($cola,$valb);
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->num_rows();
    }

    public function favcartcheck($uid,$pid,$table)
    {
        $val = $this->db->select('*')
        ->from($table)
        ->where('uid',$uid)
        ->where('pid',$pid)
        ->limit(1)
        ->get()->num_rows();
        if($val == 1){
            return true;
        }
        else{
            return false;
        }
    }

    public function remfrmfav($pid,$uid)
    {
        $this->db->where('pid',$pid);
        $this->db->where('uid',$uid);
        $this->db->delete('favs');
        return TRUE;
    }

    public function remfrmcart($pid,$uid)
    {
        $this->db->where('pid',$pid);
        $this->db->where('uid',$uid);
        $this->db->where('status','cart');
        $this->db->delete('carts');
        return TRUE;
    }

    public function favs()
    {
        $this->db->order_by("favs.id","desc");
        $this->db->select('*');
        $this->db->from('favs');
        $this->db->where('uid',$this->session->userdata('user')['id']);
        $this->db->join('products', 'favs.pid = products.id');
        return $this->db->get()->result();
    }

    public function carts()
    {
        $this->db->order_by("carts.id","desc");
        $this->db->select('*');
        $this->db->from('carts');
        $this->db->where('uid',$this->session->userdata('user')['id']);
        $this->db->where('status','cart');
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->result();
    }


    public function gtanl($col)
    {
        return $this->db->select($col)
        ->from('analyz')
        ->limit(1)
        ->get()->row()->$col;
    }

    public function getcount($table)
    {
        return $this->db->select('id')
        ->from($table)
        ->get()->num_rows();
    }

    public function getcountwhere($table,$col,$val)
    {
        return $this->db->select('id')
        ->from($table)
        ->where($col,$val)
        ->get()->num_rows();
    }

    public function getcountwhereb($table,$cola,$vala,$colb,$valb)
    {
        return $this->db->select('id')
        ->from($table)
        ->where($cola,$vala)
        ->where($colb,$valb)
        ->get()->num_rows();
    }

    public function analyz($p)
    {
        $result = $this->db->select('*')
        ->from('analyz')
        ->limit(1)
        ->get();

        $this->db->set($p,$result->result()[0]->$p + 1);
        $this->db->set('total',$result->result()[0]->total + 1);
        $this->db->update('analyz');

        $this->session->set_userdata('view', 'view');

        return $result->result()[0]->$p + 1;
    }

    public function invocount()
    {
        return $this->db->select('count')
        ->from('invo_count')
        ->limit(1)
        ->get()->result();
    }

    public function inc($count,$inc)
    {
        $this->db->where('count',$count);
        $this->db->set('count',$inc);
        $this->db->update('invo_count');
        return TRUE;
    }

    public function total()
    {
        $this->db->select_sum('price');
        $this->db->from('carts');
        $this->db->where('uid',$this->session->userdata('user')['id']);
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->row()->price;
    }

    public function orders($uid)
    {
        $this->db->order_by("carts.id","desc");
        $this->db->select('*');
        $this->db->from('carts');
        $this->db->where('carts.uid',$uid);
        $this->db->where('carts.status !=','cart');
        $this->db->where('carts.status !=','arrived');
        $this->db->where('carts.status !=','confirmed');
        $this->db->where('carts.status !=','dispatched');
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->result();
    }

    public function ordersa($uid)
    {
        $this->db->order_by("carts.id","desc");
        $this->db->select('*');
        $this->db->from('carts');
        $this->db->where('carts.uid',$uid);
        $this->db->where('carts.status !=','cart');
        $this->db->where('carts.status !=','order');
        $this->db->where('carts.status !=','order_p');
        $this->db->where('carts.status !=','order_w');
        $this->db->join('products', 'carts.pid = products.id');
        return $this->db->get()->result();
    }

}
