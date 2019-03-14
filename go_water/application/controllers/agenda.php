<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class agenda extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('agenda_model');
    }
    

    public function index()
    {
        $data['member']=$this->agenda_model->get_agenda()->result_object();
        $data['kanan']='admin/agenda';
        $this->load->view('admin/main',$data);
    }

}

/* End of file Controllername.php */


?>