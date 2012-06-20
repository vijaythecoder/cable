<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	public function add_customer()
	{
		$this->load->view('add_customer');
	}
	
	public function create_customer()
	{
		$this->form_validation->run('add_customer');
		$this->Customer_model->add_customer();		
			
	}
	public function vijay()
	{
		$vj=$this->Customer_model->get_person_id();
		echo $vj->pid;
		}
}
	