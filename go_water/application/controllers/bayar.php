<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class bayar extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('bayar_model');	
    }

    public function index()
    {

    }
    public function detail()
    {
        
        $value=$this->uri->segment(3);        
        $data['member']=$this->bayar_model->get_bayar($value)->result_object();
        $data['kanan']='admin/bayar';
        $this->load->view('admin/main',$data); 
    }

}

/* End of file Pembayran.php */


?>