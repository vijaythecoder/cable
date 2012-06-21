<?php $this->load->view('partial/header');
 echo form_open('customer/create_customer',array('id'=>'add_customer'))?>
<center><ul type='none' id="error_message_box"></ul>
<h3>Add Customer</h3>
<ul id="error_message_box"></ul>
<table> 	
<tr><td> First Name </td>
<td> <?php echo form_input('first_name','')?> </td></tr>
<tr><td> Last Name </td>
<td> <?php echo form_input('last_name','')?> </td></tr>
<tr><td> Phone Number </td>
<td> <?php echo form_input('phone_number','')?> </td></tr>
<tr><td> Email ID: </td>
<td> <?php echo form_input('email','')?> </td></tr>
<tr><td> Address </td>
<td> <?php echo form_input('address','')?> </td></tr>
<tr><td> City </td>
<td> <?php echo form_input('city','')?> </td></tr>
<tr><td> Installation Date </td>
<td> <?php
$data = array(
              'name'  => 'installation_date',
              'id'   => 'datepicker'
            );

 echo form_input($data)?> </td></tr>
</body><tr><td> Advance amount </td>
<td> <?php echo form_input('advance_amount','')?> </td></tr>
<tr><td> Payment type </td>
<td> <?php echo form_input('payment_type','')?> </td></tr>
<tr><td> Next pay </td>
<td> <?php echo form_input('next_pay','')?> </td></tr>
<tr><td> Amount </td>
<td> <?php echo form_input('amount','')?> </td></tr>
<tr><td> Due amount </td>
<td> <?php echo form_input('due_amount','')?> </td></tr>
<tr><td> <?php echo form_submit('submit','Add Customer')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center>

<script type='text/javascript'>

//validation and submit handling
$(document).ready(function()
{	
	var submitting = false;
	
	
		$( "#datepicker" ).datepicker();
	
	
	$('#add_customer').validate({
		submitHandler:function(form)
		{
			if (submitting) return;
			submitting = true;
			$(form).mask("Loading Please wait");
			$(form).ajaxSubmit({
			success:function(response)
			{
				alert('success');
				//window.location.href='<?php anchor('login'); ?>';
			},
			dataType:'json'
		});

		},
		errorLabelContainer: "#error_message_box",
 		wrapper: "li",
		rules: 
		{
			first_name:"required",
			last_name:"required",
			phone_number:
			{
			required:true,
			minlength:10
			},
			installation_date:"required",
			payment_type:"required",
			amount:"required"
   		},
		messages: 
		{   
			first_name:"First Name is required",
			last_name:"Last Name is required",
			phone_number:
			{
			required:"Phone Number is required",
			minlength:"Phone number should be minimum 10"
			},
			installation_date:"Installation is required",
			payment_type:"Payment Type is required",
			amount:"Amount is required"
		}
	});
});
</script>