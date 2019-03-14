<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keuangan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('keuangan_model');	
    }
    

    public function index()
    {
        $data['member']=$this->keuangan_model->get_keuangan()->result_object();
        $data['kanan']='admin/keuangan';
        $this->load->view('admin/main',$data);  
    }

}

/* End of file Controllername.php */

?>