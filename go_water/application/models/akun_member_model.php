<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class akun_member_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
public function all_akun()
{
   return $this->db->get('customer');
   
}

public function get_detail($unix)
{
    $this->db->where('ID', $unix);
    return $this->db->get('customer');
    
    
}

public function save_databse($pass,$id)
{
        $this->db->where('ID', $id);
 return $this->db->update('customer', $pass);
   

}






}
?>