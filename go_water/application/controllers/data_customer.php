<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_customer extends CI_Controller {

     public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('data_customer_model');	
	    
        }


    public function index()
    {
         
        $data['member']=$this->data_customer_model->verify_member()->result_object();
        $data['kanan']='admin/data_customer';
        $this->load->view('admin/main',$data);
        
    }

    public function edit_customer($unix)
    {

        $data['member']=$this->data_customer_model->edit_customer_model($unix)->result_object();
        $data['kanan']='admin/edit_member';
       $this->load->view('admin/main',$data);
         
    }

    public function simpan_edit()
    {
       $nama=$this->input->get_post('nama');
       $unix=$this->input->get_post('id');
       $alamat=$this->input->get_post('alamat');
       $telpon=$this->input->get_post('telpon');
       $bayar=$this->input->get_post('bayar');
       $paket=$this->input->get_post('paket');
       $status=$this->input->get_post('status');
       $sub=$this->input->get_post('submit');

       if (isset($sub)) {

        $data= array( 'Nama' => $nama , 
                      'Alamat'=>$alamat,
                      'Telp' => $telpon,
                      'Pembayaran'=> $bayar,
                      'paket'=>$paket,
                      'Status'=>$status  
                    );

             $this->data_customer_model->save_update($data,$unix);             

                if ($this->db->affected_rows()) {
                        
                        redirect(base_url().'Data_customer','refresh');                                    
                    
                    }else{
                
                    redirect(base_url().'Data_customer');
                    }
       }
    
    }

    public function hapus_customer($key)
    {
        $key=$this->uri->segment(3);      
        
        $this->data_customer_model->del_cus($key);
        if ($this->db->affected_rows()) {
                    
                    redirect(base_url().'Data_customer','refresh');                                    
                
                }else{
            
                     redirect(base_url().'l_admin');
                }
    }

}
/* End of file Controllername.php */



?>