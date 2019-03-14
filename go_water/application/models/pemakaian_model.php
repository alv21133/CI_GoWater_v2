<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakaian_model extends CI_Model {

    public function get_pemakaian()
    {
       return $this->db->query(' select No ,Customer_ID,Tanggal,status_bayar,Pemakaian_Bulan_Lalu,Pemakaian_Bulan_Ini,customer.nama from pemakaian join customer on Customer_ID = ID order by Tanggal DESC');
        
    }
    public function detail_pakai($Value)
    {            
        return $this->db->query("select No ,Customer_ID,Tanggal, Pemakaian_Bulan_Lalu,Pemakaian_Bulan_Ini,customer.nama from pemakaian join customer on Customer_ID = ID where No='$Value' limit 1");;
    }

    public function cek_no()
    {
        return $this->db->get('pemakaian');
        
    }
    public function simpan_pakai($object)
    {
        return $this->db->insert('pemakaian', $object);
        
    }
    public function update_status($value)
    {
        return $this->db->query("update customer SET Pembayaran='Belum Lunas' WHERE ID='$value'");
    }

    public function del_pakai($Value)
    {
        $this->db->where('No', $Value);    
        return $this->db->delete('pemakaian');
        
    }

    public function print_pemakaian()
    {
      return $this->db->query('select No ,Customer_ID,Tanggal, Pemakaian_Bulan_Lalu,Pemakaian_Bulan_Ini,customer.nama from pemakaian join customer on Customer_ID = ID order by No ASC');;
    }
}

/* End of file Pemakaian_model.php */


?>