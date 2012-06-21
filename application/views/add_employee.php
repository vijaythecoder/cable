<?php $this->load->view('partial/header');
 echo form_open('employee/create_employee',array('id'=>'add_employee'))?>
<center><ul type='none' id="error_message_box"></ul>
<h3>Add Employee</h3>
<ul id="error_message_box"></ul>
<table><tr><td> Employee ID: </td>
<td> <?php echo form_input('pid','')?> </td></tr>
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
<tr><td> Username </td>
<td> <?php echo form_input('username','')?> </td></tr>
<tr><td> Password </td>
<td> <?php echo form_password('password','')?> </td></tr>

<tr><td>Conform Password </td>
<td> <?php echo form_password('cpassword','')?> </td></tr>

<tr><td> <?php echo form_submit('submit','Add employee')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center><script type='text/javascript'>

//validation and submit handling
$(document).ready(function()
{	
	var submitting = false;
	
	$('#add_employee').validate({
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
				password:{
				required:true,
				minlength:6
			},
			cpassword:
			{
				equalTo:"#password"
				},
		
			email:"email"
   		},
		messages: 
		{   
			first_name:"First Name is required",
			last_name:"Last Name is required",
			password:{
				required:"password is required",
				minlength:"password should be min 6"
			},
			cpassword:
			{
				equalTo:"password not match"
				},
			email:"valid email"
		
		}
	});
});
</script>