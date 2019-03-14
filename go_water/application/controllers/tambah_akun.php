<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_akun extends CI_Controller {


public function __construct()
{
    parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->model('akun_member_model');	
	    
}
    public function index()
    {
        $data['member']=$this->akun_member_model->all_akun()->result_object();
        $data['kanan']='admin/akun_member';
        $this->load->view('admin/main',$data);
         
    }

    public function kelola_akun($key)
    {
     $key=$this->uri->segment(3);        
     $data['member']=$this->akun_member_model->get_detail($key)->result_object();
     $data['kanan']='admin/simpan_akun';
     $this->load->view('admin/main',$data);   
    }

    public function save_akun()
    {   
        $sub=$this->input->get_post('submit');
        $unix=$this->input->get_post('id');
        $pass=$this->input->get_post('pass');
        
    if (isset($sub)) 
        {
          $objek=array('Password' => $pass, );

          $this->akun_member_model->save_databse($objek,$unix);
            if ($this->db->affected_rows()) {                
                redirect(base_url().'Tambah_akun','refresh');
                
            }else{
                
                redirect(base_url().'Tambah_akun','refresh');
                
            }
        }     


    }

}

/* End of file Controllername.php */


?>