<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	public function addcustomer()
	{
		$this->load->view('addcustomer');
	}
	
	public function create_customer()
	{
		if($this->form_validation->run('addcustomer') == true)
			{
			$this->Customer_model->add_customer();
			}
	}
}
	