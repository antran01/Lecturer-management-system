<?php
$id = $_POST['emp_dept_id'];
$sql = "SELECT * FROM department WHERE dept_id=$id";
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
<form action = "updatedepartment.php" method = "post">
<table width = "400" border = "0" cellspacing="1"
cellpadding="5">
<tr>
<td width = "100">ID</td>
<td><input name = "emp_dept_id" type = "text" value = "<?php echo 
$row["dept_id"];?>"
id = "emp_dept_id"></td>
</tr>
 <tr>
<td width = "100">Name</td>
<td><input name = "emp_dept_name" type = "text" value = "<?php echo 
$row["dept_name"];?>"
id = "emp_dept_name"></td>
</tr>
<tr>
<td width = "100">Room</td>
<td><input name = "emp_room" type = "text" value = "<?php echo 
$row["room"];?>"
id = "emp_room"></td>
</tr>
<tr>
<td width = "100">Capacity</td>
<td><input name = "emp_capacity" type = "text" value = "<?php echo 
$row["capacity"];?>"
id = "emp_capacity"></td>
</tr>
<tr>
<td width = "100">Phone number</td>
<td><input name = "emp_dept_phonenumber" type = "text" value = "<?php echo 
$row["dept_phonenumber"];?>"
id = "emp_dept_phonenumber"></td>
</tr>
<tr>
<td width = "100">Building</td>
<td><input name = "emp_building" type = "text" value = "<?php echo 
$row["building"];?>"
id = "emp_building"></td>
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
