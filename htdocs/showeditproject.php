<?php
$id = $_POST['emp_project_id'];
$sql = "SELECT * FROM project WHERE project_id=$id";
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
<form action = "updateproject.php" method = "post">
<table width = "400" border = "0" cellspacing="1"
cellpadding="5">
<tr>
<td width = "100">ID</td>
<td><input name = "emp_project_id" type = "text" value = "<?php echo 
$row["project_id"];?>"
id = "emp_project_id"></td>
</tr>
 <tr>
<td width = "100">Name</td>
<td><input name = "emp_project_name" type = "text" value = "<?php echo 
$row["project_name"];?>"
id = "emp_project_name"></td>
</tr>
<tr>
<td width = "100">Duration</td>
<td><input name = "emp_duration" type = "text" value = "<?php echo 
$row["duration"];?>"
id = "emp_duration"></td>
</tr>
<tr>
<td width = "100">Start Date</td>
<td><input name = "emp_startdate" type = "text" value = "<?php echo 
$row["startdate"];?>"
id = "emp_startdate"></td>
</tr>
<tr>
<td width = "100">End date</td>
<td><input name = "emp_deadline" type = "text" value = "<?php echo 
$row["deadline"];?>"
id = "emp_deadline"></td>
</tr>
<tr>
<td width = "100">Budget</td>
<td><input name = "emp_budget" type = "text" value = "<?php echo 
$row["budget"];?>"
id = "emp_budget"></td>
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