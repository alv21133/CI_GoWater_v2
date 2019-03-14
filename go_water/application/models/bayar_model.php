<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar_model extends CI_Model {

    public function get_bayar($id)
    {
        return $this->db->query("select No ,Customer_ID,Tanggal, Pemakaian_Bulan_Lalu,Pemakaian_Bulan_Ini,customer.nama from pemakaian join customer on Customer_ID = ID  where No='$id' limit 1");
        
    }


}

/* End of file Bayar_model.php */


?>