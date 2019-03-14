<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    

    public function get_transaksi()
    {
        return $this->db->get('transaksi');
        
    }

}

/* End of file transaksi_model.php */


?>