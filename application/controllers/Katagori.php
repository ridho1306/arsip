<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katagori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Katagori_model');
		 $this->load->model('Bagian_model');;
		$this->data['menu']=$this->Katagori_model->get_all();
	


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Katagori";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Katagori_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Katagori/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['katagori']=$this->input->post('katagori');
		$this->data_user['id_bagian']=$this->input->post('id_bagian');

		$result=$this->Katagori_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Katagori Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Katagori');
		
	}

	public function form()
	{
		
			
		$judulhalaman = "Katagori";
		$this->data['bagian']=$this->Bagian_model->get_all();
		$this->data['judulhalaman'] = $judulhalaman;
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Katagori/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_katagori= null)
	{
		$judulhalaman = "Katagori";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Katagori_model->delete($id_katagori);

		$this->session->set_flashdata('berhasil', 'Katagori Berhasil Dihapus');			

		redirect('Katagori');	

	}

	public function data_edit($id_katagori=null){
		$judulhalaman = "Katagori";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		$this->data['bagian']=$this->Bagian_model->get_all();
		$this->data['pengguna']=$this->Katagori_model->get_data($id_katagori);

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Katagori/edit');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_katagori=null){
		$judulhalaman = "Katagori";
			
		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['katagori']=$this->input->post('katagori');
		$this->data_user['id_bagian']=$this->input->post('id_bagian');
		
		$result=$this->Katagori_model->edit($id_katagori,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Katagori Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Katagori');
	}

	
	
}

?>