<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
		
		 $this->load->model('Katagori_model');
	


	}

	public function index()
	{	
		$this->data['menu']=$this->Katagori_model->get_all();
		
			
		 $judulhalaman = "Dashboard";
	}

	
	
}

?>