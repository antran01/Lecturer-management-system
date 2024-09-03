<?php
$emp_project_id = $_POST ['emp_project_id'];
$emp_project_name = $_POST ['emp_project_name'];
$emp_duration = $_POST ['emp_duration'];
$emp_startdate = $_POST ['emp_startdate'];
$emp_deadline = $_POST ['emp_deadline'];
$emp_budget = $_POST ['emp_budget'];
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
echo "Failed to select DB. <br/>";
}
//Update project
$sql = "UPDATE project ". "SET project_id = '$emp_project_id', project_name = 
'$emp_project_name', duration = '$emp_duration', startdate = '$emp_startdate', 
deadline = '$emp_deadline', budget = '$emp_budget'". "WHERE 
project_id = $emp_project_id;";
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to UPDATE data. <br/>";
}
$sql = "SELECT * FROM project;";
if (!($result1 = mysqli_query($con,$sql))) {
echo "Failed to SELECT data. <br/>";
}
//output in a table
echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Duration</th>
<th>Start Date</th>
<th>End date</th>
<th>Budget</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row["project_id"] . "</td>";
echo "<td>" . $row["project_name"] . "</td>";
echo "<td>" . $row["duration"] . "</td>";
echo "<td>" . $row["startdate"] . "</td>";
echo "<td>" . $row["deadline"] . "</td>";
echo "<td>" . $row["budget"] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
