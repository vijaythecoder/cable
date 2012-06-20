<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Customer</title>
</head>

<body>
<?= form_open('customer/create_customer').validation_errors()?>
<center><h3>Add Customer</h3>
<table><tr><td> Customer ID: </td>
<td> <?= form_input('pid','')?> </td></tr>
<tr><td> First Name </td>
<td> <?= form_input('first_name','')?> </td></tr>
<tr><td> Last Name </td>
<td> <?= form_input('last_name','')?> </td></tr>
<tr><td> Phone Number </td>
<td> <?= form_input('phone_number','')?> </td></tr>
<tr><td> Email ID: </td>
<td> <?= form_input('email','')?> </td></tr>
<tr><td> Address </td>
<td> <?= form_input('address','')?> </td></tr>
<tr><td> City </td>
<td> <?= form_input('city','')?> </td></tr>
<tr><td> Installation Date </td>
<td> <?= form_input('installation_date','')?> </td></tr>
</body><tr><td> Advance amount </td>
<td> <?= form_input('advance_amount','')?> </td></tr>
<tr><td> Payment type </td>
<td> <?= form_input('payment_type','')?> </td></tr>
<tr><td> Next pay </td>
<td> <?= form_input('next_pay','')?> </td></tr>
<tr><td> Amount </td>
<td> <?= form_input('amount','')?> </td></tr>
<tr><td> Due amount </td>
<td> <?= form_input('due_amount','')?> </td></tr>
<tr><td> <?= form_submit('submit','Add Customer')?></td>
<td><?= form_reset('reset','Reset')?></td></tr>
</table></center>
</html>