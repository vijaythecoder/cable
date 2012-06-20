<?php
$config = array(
				'signup'=>array(
								array('field'=>'username',
										'label'=>'Username',
										'rules'=>'trim|required|alpha_dash|min_length[6]|xss_clean'),
								array('field'=>'password',
										'label'=>'password',
										'rules'=>'trim|required|min_length[6]|md5'),
								array('field'=>'email',
										'label'=>'Email',
										'rules'=>'trim|required|valid_email')
								
								),
					'signin'=>array(
									array('field'=>'id',
										'label'=>'Username',
										'rules'=>'required'),
									array('field'=>'psd',
										'label'=>'Password',
										'rules'=>'required')
									),
					'addcustomer'=> array(
											array('field'=>'pid',
													'label'=>'Person id',
													'rules'=>'required'),
											array('field'=>'first_name',
													'label'=>'First name',
													'rules'=>'required|alpha_dash'),		
											array('field'=>'phone_number',
													'label'=>'Phone Number',
													'rules'=>'required|numeric'),
											array('field'=>'email',
													'label'=>'Email ID',
													'rules'=>'valid_email'),
											array('field'=>'address',
													'label'=>'Address',
													'rules'=>'required'),
											array('field'=>'city',
													'label'=>'City',
													'rules'=>'required|alpha'),
											array('field'=>'installation_date',
													'label'=>'Installation date',
													'rules'=>'required'),
											array('field'=>'advance_amount',
													'label'=>'Advance amount',
													'rules'=>'required|integer'),
											array('field'=>'payment_type',
													'label'=>'Payment type',
													'rules'=>'required|alpha'),
											array('field'=>'next_pay',
													'label'=>'Next pay',
													'rules'=>'required'),
											array('field'=>'amount',
													'label'=>'amount',
													'rules'=>'required|integer'),
											array('field'=>'due_amount',
													'label'=>'Due amount',
													'rules'=>'required|integer'),
												
				)
			)
?>