<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Employee</title>
</head>

<body>
<?php echo form_open('employee/create_employee')?>

<center><h3>Add Employee</h3>
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

<tr><td> <?php echo form_submit('submit','Add employee')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center>
</body>
</html>