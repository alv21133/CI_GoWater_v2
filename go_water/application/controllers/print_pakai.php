<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class print_pakai extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('pemakaian_model');	
    }
    
    public function index()
    {   
        $data['member']=$this->pemakaian_model->print_pemakaian()->result_object();
        $this->load->view('admin/print_pemakaian',$data); 
        
    }



}

/* End of file print_pakai.php */


?>