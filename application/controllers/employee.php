<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function addemployee()
	{
		$this->load->view('addemployee');
	}
	public function create_employee()
	{
		$this->Employee_model->add_employee();		
			
	}
}