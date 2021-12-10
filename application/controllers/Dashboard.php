<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Dashboard_model');
		 $this->load->model('File_model');
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
	


	}

	public function index()
	{	
        $status=$this->session->userdata('status');
		$Katagori 	= 0;
		$pegawai 	= 0;
		$Bagian	= 0;
		$file 	= 0;
		$this->data['pegawai']	=  $this->Dashboard_model->getAllpegawai();
		$this->data['Katagori']	=  $this->Dashboard_model->getAllKatagori();
		$this->data['Bagian'] 	=  $this->Dashboard_model->getAllBagian();
		 $this->data['file']	=  $this->Dashboard_model->getAllfile();
		 if ($status ==  0) {
				$this->data['pengguna']=$this->File_model->get_all_dashboard();
		 }
		 else{

        $id_bagian=$this->session->userdata('id_bagian');
				$this->data['pengguna']=$this->File_model->get_all_bagian($id_bagian);

		 }
		// $this->data['pengguna']=$this->File_model->get_all_dashboard($status);
		
			
		 $judulhalaman = "Dashboard";
		$this->data['judulhalaman'] = $judulhalaman;

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Temp/Dashboard');	
		$this->load->view('Temp/footer');	

	}

	
	
}

?>