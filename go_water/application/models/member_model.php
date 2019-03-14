<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function valid_member($user,$pass)
    {
        
     return $this->db->query("select * from customer where Nama='$user' && Password='$pass'");     
       
       
    }

    public function get_member_data($user)
    {
        return $this->db->query("select ID,Nama, Saldo, pemakaian.Tanggal , pemakaian.Pemakaian_Bulan_Ini, transaksi.Biaya, transaksi.Tanggal_Bayar from customer join pemakaian on ID = pemakaian.Customer_ID join transaksi on ID = transaksi.Customer_ID where ID = '$user' ORDER BY Tanggal DESC LIMIT 1");
    }
    public function agenda()
    {
        return $this->db->query("select count(No) as jumlah from agenda");
    }


    public function detail_agenda()
    {
        return $this->db->get('agenda');
        
    }

    public function lapor_kerusakan($data)
    {
        return $this->db->insert('kerusakan', $data);
        
    }

    public function jumlah_member()
    {
        return $this->db->query("select count(ID) as jumlah from customer");
    }

    public function member_baru($object)
    {
        return $this->db->insert('customer', $object);
        
    }    

    public function get_admin($Value)
    {
        $this->db->where('Username', $Value);
        return $this->db->get('login');
        
        
    }

}

/* End of file ModelName.php */
?>