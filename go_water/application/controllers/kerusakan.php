<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kerusakan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('kerusakan_model');	
    }
    

    public function index()
    {
        $data['member']=$this->kerusakan_model->get_rusak()->result_object();
        $data['kanan']='admin/kerusakan';
        $this->load->view('admin/main',$data);
    }

}

/* End of file kerusakan.php */


?>