<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Member_model');	
		$this->load->helper('String');
		
		
	}

	public function index()
	{
		$this->load->view('index');
			
	}

	public function masuk()
	{
		if ( $_SESSION['unix'] == true && $_SESSION['user'] == true)
			{
				
				redirect(base_url().'Welcome/member');	
			}else{

				$this->load->view('login/index');
			}		
		
	}

	public function keluar()
	{
		
		$this->session->sess_destroy();
		
		redirect(base_url().'Welcome/masuk/','refresh');
	}

	public function daftar()
	{
		$this->load->view('login/daftar');
	}

	public function member()
	{
		$this->load->view('dashboard/dashboard_member');
	}

	public function proseslogin()
	{
		$konek=mysqli_connect("localhost","root","","gowater_update");
		$user= mysqli_real_escape_string($konek,$this->input->get_post('username'));
		$pass=mysqli_real_escape_string($konek,$this->input->get_post('pass'));
		$run=mysqli_real_escape_string($konek,$this->input->get_post('submit'));
		
		if (isset($run))
		 {
	
			$cek=$this->Member_model->valid_member($user,$pass)->result_object();
			$data['member']=$cek;

			if ($cek != null ) {
							
				foreach ($cek as $key)
					{
						$_SESSION['unix']=$key->ID;
						$_SESSION['user']=$key->Nama;
					}		
				$id=$_SESSION['unix'];
				$this->member_data($id);
				redirect(base_url().'Welcome/member');
				
			}else{
				$this->session->set_flashdata('key','&*&%#$%#$@');
				redirect(base_url().'Welcome/masuk');
				
			}
		}
		
	}
	
	public function member_data($id)
	{
		
		$all_data=$this->Member_model->get_member_data($id)->result_object();

		foreach ($all_data as $get ) {
			$_SESSION['pakai']=$get->Pemakaian_Bulan_Ini;
			$_SESSION['tanggal']=$get->Tanggal;
			$_SESSION['saldo']=$get->Saldo;
		}

		$jml_agenda=$this->Member_model->agenda()->result_object();

		foreach ($jml_agenda as $key ) {
			$_SESSION['agenda']=$key->jumlah;
		}

		$detail_agenda=$this->Member_model->detail_agenda()->result_object();

		foreach ($detail_agenda as $set) {
			$_SESSION['no']=$set->No;
			$_SESSION['tgl']=$set->Tanggal;
			$_SESSION['ket']=$set->Keterangan;
		}
	}

	public function kerusakan()
	{
		$sub=$this->input->get_post('submit');
		$this->session->set_flashdata('error', 'maaf gagal input');
		$this->session->set_flashdata('sukses', 'laporan sudah di kirim');
		
		if (isset($sub)) {

			$id=$_SESSION['unix'];
			$detail=$this->input->get_post('detail');
			$lokasi=$this->input->get_post('lokasi');
			$waktu=date('Y.m.d');


			$data= array('Customer_ID' =>$id ,
						 'Keterangan'=>$detail,
						 'lokasi'=>$lokasi,
						 'Tanggal'=>$waktu,	
				
						);
			
			$run=$this->Member_model->lapor_kerusakan($data);
			
			if ($run) {
				
				$this->session->flashdata('sukses');
				
				redirect('Welcome/member');
				
				
			}else{
				
				$this->session->flashdata('error');
				
			}


		}


	}

	public function daftar_member()
	{	
		$klik=$this->input->get_post('submit');
		
		if (isset($klik)) {
			
				$id=random_string('alnum', 4);
				$nama=$this->input->get_post('nama');
				$paket=$this->input->get_post('paket');
				$no=$this->input->get_post('nomor');
				$alamat=$this->input->get_post('alamat');				
				$ver='Belum Verifikasi';
				$bayar=' Belum Lunas';
				
				$object = array('ID' => $id,
								'Nama ' => $nama,
								'Alamat' => $alamat,
								'Username'=> $nama,
								'Pembayaran'=>$bayar,
								'Status' =>$ver,
								'paket'=>$paket,
								'Telp'=>$no
								);
				$this->Member_model->member_baru($object);
			
				if ($this->db->affected_rows()) {
					
					redirect(base_url(),'refresh');
					
				}else{
					
					// redirect(base_url().'Welcome/masuk/','refresh');
					
				}
		
		}
	}

}
?>
