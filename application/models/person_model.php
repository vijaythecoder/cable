<?php
class Person_model extends CI_Model
{
 	public function add_person(&$person_data)
	{
		
		if($this->db->insert('people',$person_data))
		{
			$person_data['pid']=$this->db->insert_id();
			return true;
			
		}
		
		
	}
}

?>