<?php
class Customer_model extends CI_Model
{
	public function add_person($person_data)
	{
		
		if($this->db->insert('people',$person_data))
		{
			return $person_data['pid']=$this->db->insert_id();
			
		}
		
		
		
	}
	function add_customer()
	{
		
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone_number = $this->input->post('phone_number');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		
		$installation_date = $this->input->post('installation_date');
		$advance_amount = $this->input->post('advance_amount');
		$payment_type = $this->input->post('payment_type');
		$next_pay = $this->input->post('next_pay');
		$amount = $this->input->post('amount');
		$due_amount = $this->input->post('due_amount');
		
		
		
	$person_data = array('first_name'=>$first_name,'last_name'=>$last_name,'phone_number'=>$phone_number,'email'=>$email,'address'=>$address,'city'=>$city,'deleted'=>0);
	$person_data['pid']=$this->add_person($person_data);
		$pid=$person_data['pid'];
		$customer_data = array('installation_date'=>$installation_date,'advance_amount'=>$advance_amount,'payment_type'=>$payment_type,'next_pay'=>$next_pay,'amount'=>$amount,'due_amount'=>$due_amount,'deleted'=>0,'pid'=>$pid);
		
	
	
		$this->db->insert('customers',$customer_data);
		
		}

	public function get_person_id()
	{

	    $query = $this->db->query("select max(pid) from  cbs_people");
       	return $result=$query->result();
		
		}
}

?>