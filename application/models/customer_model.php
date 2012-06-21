<?php
class Customer_model extends CI_Model
{	
	public function add_customer()
	{
	 	//assigning person data 
		$person_data = array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'phone_number'=>$this->input->post('phone_number'),
			'email'=>$this->input->post('email'),
			'address'=>$this->input->post('address'),
			'city'=>$this->input->post('city'),
			'deleted'=>0);
		if($this->Person_model->add_person($person_data)) //inserting person data
			{
				$customer_data = array(
					'installation_date'=>$this->input->post('installation_date'),
					'advance_amount'=>$this->input->post('advance_amount'),
					'payment_type'=>$this->input->post('payment_type'),
					'next_pay'=>$this->input->post('next_pay'),
					'amount'=>$this->input->post('amount'),
					'due_amount'=>$this->input->post('due_amount'),
					'deleted'=>0,
					'pid'=>$person_data['pid']);
		
				if($this->db->insert('customers',$customer_data))
				return true;
				else
				return false;
			}
	}

}

?>