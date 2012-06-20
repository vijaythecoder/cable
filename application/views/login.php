<center><table>
<?= form_open('employee/user_login')?>
<tr><td> Username : </td>
<td> <?= form_input('username','')?> </td></tr>
<tr><td> Password: </td>
<td> <?= form_password('password','')?></td></tr>
<tr><td> <?= form_submit('submit','Login')?> </td>
<td> <?= form_reset('reset','Reset')?> </td></tr>  

</table></center>