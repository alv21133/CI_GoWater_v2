<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model {

    
    public function get_member($unix)
    {
               $this->db->where('Status',$unix);
        return $this->db->get('customer');
        
    }

    public function terima_member($data,$unix)
    {
            $this->db->where('ID', $unix);
     return $this->db->update('customer', $data);
            
    }

    public function delete_konfirm($unix)
    {
               $this->db->where('ID', $unix);
        return $this->db->delete('customer');         
    }

}

/* End of file ModelName.php */


?>