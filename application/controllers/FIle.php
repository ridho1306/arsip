<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('File_model');
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
	


	}

	public function index()
	{	 
		
			
		 $judulhalaman = "File";
		// $this->data['data']=$this->Katagori_model->get_data();
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->File_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('File/daftar');	
		$this->load->view('Temp/footer');	

	}
	public function daftar($id)
	{	 
		
		$judul=$this->Katagori_model->get_data($id);
		$this->data['judulhalaman'] = $judul->katagori;
		$this->data['id_katagori'] = $id;

		$this->data['pengguna']=$this->File_model->get_all_katagori($id);

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('File/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function insert() {
	// upload file 
		$this->data_user['id_katagori']=$this->input->post('id_katagori');
        $this->data_user['id_pegawai']=$this->session->userdata('id');
		$this->data_user['nama_file']=$this->input->post('nama');
		$this->data_user['tanggal_upload'] = date("Y-m-d");

		$judul=$this->Katagori_model->get_data($this->data_user['id_katagori']);

		$config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'jpeg|png|JPG|gif|jpg|PDF|pdf|docx';
		$config['overwrite']			= true;
        $config['max_size']             = '10000000000';
         $config['file_name']     = $judul->katagori . "_" . time();
        
        $this->load->library('upload', $config); 
        $this->upload->do_upload("data");
	    $this->data_user['data'] = $this->upload->data()['file_name'];



		$result=$this->File_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'File Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('File/daftar/'.$this->data_user['id_katagori']);
		
	}

	public function form($id= null)
	{
		
		$judul=$this->Katagori_model->get_data($id);
		$this->data['judulhalaman'] = $judul->katagori;
		$this->data['id_katagori'] = $id;
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('File/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id= null , $id_katagori=null)
	{
			
		$this->File_model->delete($id);

		$this->session->set_flashdata('berhasil', 'File Berhasil Dihapus');			

		redirect('File/daftar/'.$id_katagori);

	}

	public function data_edit($id_File=null, $id= null){

		$judul=$this->Katagori_model->get_data($id);
		$this->data['judulhalaman'] = $judul->katagori;
		$this->data['id_katagori'] = $id;

		
		$this->data['pengguna']=$this->File_model->get_data($id_File);

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('File/edit');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_File=null){

		$this->data_user['id_katagori']=$this->input->post('id_katagori');
        $this->data_user['id_pegawai']=$this->session->userdata('id');
		$this->data_user['nama_file']=$this->input->post('nama');
		$this->data_user['tanggal_upload'] = date("Y-m-d");

		$judul=$this->Katagori_model->get_data($this->data_user['id_katagori']);

		$config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'jpeg|png|JPG|gif|jpg|PDF|pdf|docx';
		$config['overwrite']			= true;
        $config['max_size']             = '10000000000';
         $config['file_name']     = $judul->katagori . "_" . time();
        
        $this->load->library('upload', $config);

       $cek = $this->upload->do_upload("data");

		if($cek != null)
		{  
	    	$this->data_user['data'] = $this->upload->data()['file_name'];
		}
		
		$result=$this->File_model->edit($id_File,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'File Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		 redirect('File/daftar/'.$this->data_user['id_katagori']);
	}

	
	
}

?>