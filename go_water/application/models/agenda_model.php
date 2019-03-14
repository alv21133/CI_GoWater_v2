<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class agenda_model extends CI_Model {

public function get_agenda()
{
    return $this->db->get('agenda');
    
}

    

}

/* End of file agenda_model.php */



?>