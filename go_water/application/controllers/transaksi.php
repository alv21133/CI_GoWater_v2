<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('transaksi_model');
    }
    

    public function index()
    {
        $data['member']=$this->transaksi_model->get_transaksi()->result_object();
        $data['kanan']='admin/transaksi';
        $this->load->view('admin/main',$data);
        
    }

}

/* End of file transaksi.php */


?>