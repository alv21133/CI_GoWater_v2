<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pakai extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('pemakaian_model');	
	   
    }
    
    public function index()
    {
        $data['member']=$this->pemakaian_model->get_pemakaian()->result_object();
        $data['kanan']='admin/pemakaian';
        $this->load->view('admin/main',$data);        

    }
    public function input_pakai()
    {
        $unix=$this->uri->segment(3);        
        $data['member']=$this->pemakaian_model->detail_pakai($unix)->result_object();
        $data['kanan']='admin/input_pemakaian';
        $this->load->view('admin/main',$data);
    }

    public function simpan_pakai()
    {
        $new_data=$this->input->get_post('bulan_baru');
        

        if (isset($new_data)) {
            $no=$this->pemakaian_model->cek_no();
            $_no=$no->num_rows();
            $no_new=$_no+1;
            $waktu=date('Y.m.d');
            $buy='Blm Bayar';
            $last_use=$this->input->get_post('bulan_lama');
            $id=$this->input->get_post('id');
            $value = array('No'                     => $no_new,
                           'Tanggal'                => $waktu,
                           'Customer_ID'            => $id,
                           'Pemakaian_Bulan_Lalu'   => $last_use,
                           'Pemakaian_Bulan_Ini'    => $new_data,
                           'status_bayar'           => $buy,
                        );
            $this->pemakaian_model->simpan_pakai($value);
            $this->pemakaian_model->update_status($id);
            if ($this->db->affected_rows()) {
                redirect(base_url().'pakai');                
            }else{

            }
           
        }

     }
     
     public function del_pakai()
     {
         $unix=$this->uri->segment(3);
         $this->pemakaian_model->del_pakai($unix);

         if ($this->db->affected_rows()) {
            
            redirect('pakai');
            
         }else{

         }
         
     }

}

/* End of file Controllername.php */


?>