<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		$this->data['judulhalaman'] = "Profil";
		
		
		$this->load->model('Pegawai_model');
		// $this->load->model('Rekanan_model');
		$this->id = $this->session->userdata('id');
		$this->password= $this->session->userdata('password');
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
	}

	public function index()
	{
		//$this->data1['extra'] = "Profil";
		$pengguna=$this->Pegawai_model->get_data($this->id);

		$this->data['pengguna'] =$pengguna;
		//var_dump($pengguna->nama_pegawai);

			$this->load->view('temp/header');
			$this->load->view('temp/sidebar',$this->data);
			$this->load->view('pegawai/profil');
			$this->load->view('temp/footer');
	
	}


	public function ubah_password()
	{
		$password1  	= $this->input->post('password1');
		$password 		= $this->input->post('password');
		
		//var_dump($this->password);
		if(md5($password1) == $this->password)
		{
			$data['password']= md5($password);
			
			$ubahpassword = $this->Pegawai_model->edit($this->id,$data);

			$this->session->set_flashdata('login','berhasil beruah');
			$this->session->sess_destroy();
			redirect('login');
		}

		else
		{
			$this->session->set_flashdata('gagal', 'password beda');
			redirect('profil');

		}
		

	}


	public function update()
	{

		$this->data_user['nama_pegawai']=$this->input->post('nama');
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');

		$result = $this->Pegawai_model->edit($this->id, $this->data_user);
		
		$this->session->set_userdata(array(
			'nama' => $this->data_user['nama_pegawai']));	
		if($result != null)
		{
			$this->session->set_flashdata('berhasil', 'Data Berhasil Diubah');			
		}
		else
		{
			$this->session->set_flashdata('gagal', 'Data Gagal Diubah');				
		}
		 redirect('profil');
		
		
	}

	public function rekanan()
	{
		//$this->data1['extra'] = "Profil";
		$pengguna=$this->Rekanan_model->get_data($this->id);

		$this->data['pengguna'] =$pengguna;
		//var_dump($pengguna->nama_pegawai);

			$this->load->view('temp/header');
			$this->load->view('temp/sidebar',$this->data);
			$this->load->view('Rekanan/profil');
			$this->load->view('temp/footer');
	
	}
	public function ubah_password_rekanan()
	{
		$password1  	= $this->input->post('password1');
		$password 		= $this->input->post('password');
		
		//var_dump($this->password);
		if(md5($password1) == $this->password)
		{
			$data['password']= md5($password);
			
			$ubahpassword = $this->Rekanan_model->edit($this->id,$data);

			$this->session->set_flashdata('login','berhasil beruah');
			$this->session->sess_destroy();
			redirect('login');
		}

		else
		{
			$this->session->set_flashdata('gagal', 'password beda');
			redirect('profil/rekanan');

		}
		

	}


	public function update_rekanan()
	{

		$this->data_user['username']=$this->input->post('username');
		$this->data_user['nama']=$this->input->post('nama');
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');

		$result = $this->Rekanan_model->edit($this->id, $this->data_user);
		
		$this->session->set_userdata(array(
			'nama' => $this->data_user['nama']));	
		if($result != null)
		{
			$this->session->set_flashdata('berhasil', 'Data Berhasil Diubah');			
		}
		else
		{
			$this->session->set_flashdata('gagal', 'Data Gagal Diubah');				
		}
		 redirect('profil/rekanan');
		
		
	}

}

?>
