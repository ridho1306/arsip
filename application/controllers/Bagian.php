<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Bagian_model');
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
	


	}

	public function index()
	{	 
		
			
		 $judulhalaman = "Bagian";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Bagian_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Bagian/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['bagian']=$this->input->post('bagian');
		$this->data_user['status']=$this->input->post('status');

		$result=$this->Bagian_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Bagian Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Bagian');
		
	}

	public function form()
	{
		
			
		$judulhalaman = "Bagian";
		$this->data['judulhalaman'] = $judulhalaman;
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Bagian/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_bagian= null)
	{
		$judulhalaman = "Bagian";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Bagian_model->delete($id_bagian);

		$this->session->set_flashdata('berhasil', 'Bagian Berhasil Dihapus');			

		redirect('Bagian');	

	}

	public function data_edit($id_bagian=null){
		$judulhalaman = "Bagian";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		$this->data['pengguna']=$this->Bagian_model->get_data($id_bagian);

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Bagian/edit');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_bagian=null){
		$judulhalaman = "Bagian";
			
		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['bagian']=$this->input->post('bagian');
		$this->data_user['status']=$this->input->post('status');
		
		$result=$this->Bagian_model->edit($id_bagian,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Bagian Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Bagian');
	}

	
	
}

?>