<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function is_logged()
	{
		return $this->session->userdata('username')!=FALSE;
		
	}
	public function add_employee()
	{
		$this->load->view('add_employee');
	}
	public function create_employee()
	{
		$this->Employee_model->add_employee();		
			
	}
	public function login()
	{
		if($this->is_logged())
		{
		redirect('employee/homepage');
		}
		$this->load->view('login');
	}
	public function user_login()
	{
		$data = $this->Employee_model->login();
				if ($data > 0)
					{
						$dat['name']=$this->input->post('username');
						$this->session->set_userdata('username',$dat['name']);
						redirect('employee/homepage');
					}
				else
				 $this->load->view('add_employee');

	}
	public function homepage()
	{
		if($this->is_logged())
		{
			$this->load->view('home');
		}
		else
		redirect('employee/login');
	}
	public function logout()
	 {
		$this->session->sess_destroy();
		$this->load->view('logout');
	 }
}