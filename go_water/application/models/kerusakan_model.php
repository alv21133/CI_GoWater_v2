<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kerusakan_model extends CI_Model {

    
public function get_rusak()
{
    return $this->db->get('kerusakan');
    
}








}

/* End of file kerusakan_model.php */


?>