<?php
class Customer_model extends CI_Model
{
	public function add_customer()
	{
		$pid = $this->input->post('pid');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone_number = $this->input->post('phone_number');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$deleted = 0;
		$installation_date = $this->input->post('installation_date');
		$advance_amount = $this->input->post('advance_amount');
		$payment_type = $this->input->post('payment_type');
		$next_pay = $this->input->post('next_pay');
		$amount = $this->input->post('amount');
		$due_amount = $this->input->post('due_amount');
		
		$data = array('installation_date'=>$installation_date,'advance_amount'=>$advance_amount,'payment_type'=>			$payment_type,'next_pay'=>$next_pay,'amount'=>$amount,'due_amount'=>$due_amount,'pid'=>$pid,'deleted'=>0);
		
		$req = array('pid'=>$pid,'first_name'=>$first_name,'last_name'=>$last_name,'phone_number'=>$phone_number,'email'=>$email,'address'=>$address,'city'=>$city,'deleted'=>0);
		
		$this->db->insert('cbs_customers',$data);
		$this->db->insert('cbs_people',$req);
		
		
		
	}
}

?>