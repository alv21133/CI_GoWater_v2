<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class keuangan_model extends CI_Model {

public function get_keuangan()
{
    return $this->db->get('keuangan');   
}


}

/* End of file ModelName.php */



?>