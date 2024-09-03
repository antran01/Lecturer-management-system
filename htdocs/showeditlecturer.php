<?php
$id = $_POST['emp_lec_ID'];
$sql = "SELECT * FROM lecturer WHERE lec_ID=$id";
//connect to server
$con = mysqli_connect("localhost","tranhoanggiaan","tranhoanggian");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_errno();
} else {
//echo "succeed";
}
//use database
$db_selected = mysqli_select_db($con, "lecturermanagement");
if (!$db_selected) {
echo "Failed to select DB. <br/>";}
//execute SQL query
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to get data. <br/>";}
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
<form action = "updatelecturer.php" method = "post">
<table width = "400" border = "0" cellspacing="1"
cellpadding="5">
<tr>
<td width = "100">ID</td>
<td><input name = "emp_lec_ID" type = "text" value = "<?php echo 
$row["lec_ID"];?>"
id = "emp_lec_ID"></td>
</tr>
 <tr>
<td width = "100">Name</td>
<td><input name = "emp_lec_name" type = "text" value = "<?php echo 
$row["lec_name"];?>"
id = "emp_lec_name"></td>
</tr>
<tr>
<td width = "100">Gender</td>
<td><input name = "emp_gender" type = "text" value = "<?php echo 
$row["gender"];?>"
id = "emp_gender"></td>
</tr>
<tr>
<td width = "100">Date of Birth</td>
<td><input name = "emp_date_of_birth" type = "text" value = "<?php echo 
$row["date_of_birth"];?>"
id = "emp_date_of_birth"></td>
</tr>
<tr>
<td width = "100">GPA</td>
<td><input name = "emp_GPA" type = "text" value = "<?php echo 
$row["GPA"];?>"
id = "emp_GPA"></td>
</tr>
<tr>
<td width = "100">Salary</td>
<td><input name = "emp_salary" type = "text" value = "<?php echo 
$row["salary"];?>"
id = "emp_salary"></td>
</tr>
<tr>
<td width = "100">Phone number</td>
<td><input name = "emp_lec_phone_number" type = "text" value = "<?php echo 
$row["lec_phone_number"];?>"
id = "emp_lec_phone_number"></td>
</tr>
<tr>
<td width = "100">Email</td>
<td><input name = "emp_lec_email" type = "text" value = "<?php echo 
$row["lec_email"];?>"
id = "emp_email"></td>
</tr>
<tr>
<td width = "100">ID of Department</td>
<td><input name = "emp_lec_dep_ID" type = "text" value = "<?php echo 
$row["lec_dep_ID"];?>"
id = "emp_lec_dep_ID"></td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td> </td>
</tr>
<tr>
<td width = "100"> </td>
<td>
<input name = "update" type = "submit"
id = "update" value = "UPDATE">
</td>
</tr>
</table>
</form>
<?php mysqli_close($con);
}?>
