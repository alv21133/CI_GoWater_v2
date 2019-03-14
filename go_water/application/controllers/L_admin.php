<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class l_admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Member_model');	
        $this->load->model('agenda_model');	
        $this->load->helper('string');	
	    
    }
    
    public function index()
    {
     $this->load->view('admin/admin_login');
      
    }
    
      public function admin()
    {
        $run=$this->input->post('submit');        
        if (isset($run)) {
          $user=$this->input->get_post('username');         
          $i_pass=$this->input->get_post('pass');      
          $val=$this->Member_model->get_admin($user)->result_object();
          if ($val!= null)
           {
              foreach ($val as $key) {
                $pass_key=$key->Password;
              }
              if (password_verify($i_pass,$pass_key))
                { $_SESSION['unix']=$pass_key;             
                  $data['jml_member']= $this->Member_model->jumlah_member()->result_object();
                  $data['agenda']= $this->agenda_model->get_agenda()->result_object();
                  $data['kanan']='admin/right';
                  $this->load->view('admin/main',$data);
                  
                }else{                  
                     $_SESSION['pas_false']="ljfsdfjlskdfjh"; 
                    $this->load->view('admin/admin_login');
                }
            }else {
              $_SESSION['key_']="ljfsdfjl"; 
             $this->load->view('admin/admin_login');             
            }

        }else{
          
            $_SESSION['key5']="ljflskdfjhh";
          $this->load->view('admin/admin_login');           
        }
    }

public function log_out()
{
  session_destroy();  
  redirect('l_admin','refresh');  
  
}





}

?>