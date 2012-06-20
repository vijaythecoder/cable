<?php
class employee_model extends CI_Model
{
	public function add_employee()
	{
		$pid = $this->input->post('pid');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone_number = $this->input->post('phone_number');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$deleted = 0;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$req = array('pid'=>$pid,'first_name'=>$first_name,'last_name'=>$last_name,'phone_number'=>$phone_number,'email'=>$email,'address'=>$address,'city'=>$city,'deleted'=>0);
		
		$data = array('username'=>$username,'password'=>$password,'pid'=>$pid,'deleted'=>0);
		
		$this->db->insert('cbs_people',$req);
		$this->db->insert('cbs_employees',$data);
	} 
	public function login()
	{
		$uname = $this->input->post('username');
		$psd = $this->input->post('password');
		
		$query = $this->db->query("select * from cbs_employees where username = '$uname' and password = '$psd' ");
		return $query->num_rows();
	}
}


