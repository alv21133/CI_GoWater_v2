<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class data_customer_model extends CI_Model {

    

public function __construct()
{
    parent::__construct();
    //Do your magic here
}


public function verify_member()
{

     return $this->db->query("select * from customer where Status='Verifikasi'");
}

public function edit_customer_model($id)
{
    return $this->db->query("select * from customer where ID='$id'");
}

public function save_update($data,$id)
{
        $this->db->where('ID', $id);
      return $this->db->update('customer', $data);
   
}

public function del_cus($id)
{
    $this->db->where('ID', $id);
    return $this->db->delete('customer');
    
}

}
?>