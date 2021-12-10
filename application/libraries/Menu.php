<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu 	 {

	public function __construct()
	{
	
		
	


	}

	public function index()
	{	
		 $this->load->model('Katagori_model');
		$this->data['menu']=$this->Katagori_model->get_all();
		
			
		 $judulhalaman = "Dashboard";
	}

	
	
}

?>