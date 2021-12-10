<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Pegawai_model');
		 $this->load->model('Bagian_model');
		 
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
	


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Pegawai";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Pegawai_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Pegawai/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['id_bagian']=$this->input->post('id_bagian');
		$this->data_user['nip']=$this->input->post('nip');
		$this->data_user['nama_pegawai']=$this->input->post('nama');
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');
		$this->data_user['password']=md5($this->input->post('nip'));

		$result=$this->Pegawai_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Pegawai Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Pegawai');
		
	}

	public function form()
	{
		
		
			
		$judulhalaman = "Pegawai";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['bagian']=$this->Bagian_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('pegawai/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_pegawai= null)
	{
		$judulhalaman = "Data Pegawai";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Pegawai_model->delete($id_pegawai);

		$this->session->set_flashdata('berhasil', 'Data Pegawai Berhasil Dihapus');			

		redirect('Pegawai');	

	}

	public function data_edit($id_pegawai=null){

		$judulhalaman = "Data Pegawai";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Pegawai_model->get_data($id_pegawai);
		$this->data['bagian']=$this->Bagian_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('pegawai/edit');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_pegawai=null){
		$judulhalaman = "Pegawai";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		// $this->data_user['jabatan']=$this->input->post('unit_pegawai');
		$this->data_user['nip']=$this->input->post('nip');
		$this->data_user['id_bagian']=$this->input->post('id_bagian');
		$this->data_user['nama_pegawai']=$this->input->post('nama');
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');
		if($this->input->post('password')!= null)
		{
			$this->data_user['password']=md5($this->input->post('password'));
		}
		$result=$this->Pegawai_model->edit($id_pegawai,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Pegawai Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Pegawai');
	}

	
	
}

?>