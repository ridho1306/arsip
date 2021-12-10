<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

		$this->data['extra'] = "Login";
		$this->data['judulhalaman'] = "Login";
		$this->load->model('Pegawai_model');
		$this->load->model('Bagian_model');
		
 
	}

	public function index()
	{
			$this->data['pengguna']=$this->Bagian_model->get_all();

			$this->load->view('login', $this->data);
	

	}

	public function autentication()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$bagian = $this->input->post('bagian');
		 
			$cek=$this->Pegawai_model->cek_login($nip, md5($password), $bagian);

			if($cek!= null)
			{			
				$unit_pegawai = $cek->bagian;
				$password = $cek->password;	
				$nip = $cek->nip;
				$nama = $cek->nama;
				$status = $cek->status;
				$id = $cek->id_pegawai;
				$id_bagian = $cek->id_bagian;
				
				$this->session->set_userdata(array(
					'login' => true,
					'nama' => $nama,
					'id' => $id,
					'status' => $status,
					'unit_pegawai' => $unit_pegawai,
					'nip' => $nip,
					'id_bagian' => $id_bagian,
					'password'=> $password));						
				
				 redirect('Dashboard');
			}
			else
			{
				$this->session->set_flashdata('login','login tidak berhasil <br> username dan password salah');
				redirect('login');
			} 			
		
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');

	}
	
}

?>