<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('konfirmasi_model');		    
    }
    
    public function index()
    {   $value='Belum Verifikasi';
        $data['member']=$this->konfirmasi_model->get_member($value)->result_object();
        $data['kanan']='admin/konfirmasi';
        $this->load->view('admin/main',$data);        
    }

    public function member()
    {   
        $key=$this->uri->segment(3);        
        $ver='Verifikasi';
        $bayar='Lunas';
        $data = array('Status' => $ver,
                      'Pembayaran'=> $bayar
                     );
        $this->konfirmasi_model->terima_member($data,$key);
        if ($this->db->affected_rows()) {            
            redirect(base_url().'Konfirmasi','refresh');            
        }else{
            
        }
    }
    public function del_konfirmasi()
    {
        $id=$this->uri->segment(3);
        $this->konfirmasi_model->delete_konfirm($id);        
        if ($this->db->affected_rows()) {
            
            redirect(base_url().'konfirmasi'    );
            
        }else{

        }
    }
}

/* End of file Konfirmasi.php */



?>