<?php
$id = $_POST['emp_course_id'];
$sql = "SELECT * FROM course WHERE course_id=$id";
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
<form action = "updatecourse.php" method = "post">
<table width = "400" border = "0" cellspacing="1"
cellpadding="5">
<tr>
<td width = "100">ID</td>
<td><input name = "emp_course_id" type = "text" value = "<?php echo 
$row["course_id"];?>"
id = "emp_course_id"></td>
</tr>
 <tr>
<td width = "100">Title</td>
<td><input name = "emp_title" type = "text" value = "<?php echo 
$row["title"];?>"
id = "emp_title"></td>
</tr>
<tr>
<td width = "100">Credits</td>
<td><input name = "emp_course_credits" type = "text" value = "<?php echo 
$row["course_credits"];?>"
id = "emp_course_credits"></td>
</tr>
<tr>
<td width = "100">Department</td>
<td><input name = "emp_course_department" type = "text" value = "<?php echo 
$row["course_department"];?>"
id = "emp_course_department"></td>
</tr>
<tr>
<td width = "100">Semester</td>
<td><input name = "emp_semester" type = "text" value = "<?php echo 
$row["semester"];?>"
id = "emp_semester"></td>
</tr>
<tr>
<td width = "100">Year</td>
<td><input name = "emp_year" type = "text" value = "<?php echo 
$row["year"];?>"
id = "emp_year"></td>
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
