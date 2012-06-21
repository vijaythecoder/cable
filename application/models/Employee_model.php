<?php
class employee_model extends CI_Model
{
	public function add_employee()
	{		
		$person_data = array('first_name'=>$this->input->post('first_name'),
					'last_name'=>$this->input->post('last_name'),
					'phone_number'=>$this->input->post('phone_number'),
					'email'=>$this->input->post('email'),
					'address'=>$this->input->post('address'),
					'city'=>$this->input->post('city'));
			if($this->Person_model->add_person($person_data))
				{
					
		$person_data['pid']=$this->add_person($person_data);
		$pid=$person_data['pid'];
		
		$employee_data = array('username'=>$this->input->post('username'),
					  'password'=>$this->input->post('password'),
					  'deleted'=>0,'pid'=>$pid);
		
		$this->db->insert('cbs_people',$person_data);
		if($this->db->insert('cbs_employees',$employee_data))
			{
				echo "Success";
			}
				}
	} 
	public function login()
	{
		$query = $this->db->query("select * from cbs_employees where username = '$this->input->post('username')' and password = '$this->input->post('password')' ");
		return $query->num_rows();
	}
}


