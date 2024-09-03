<?php
$emp_dept_id = $_POST ['emp_dept_id'];
$emp_dept_name = $_POST ['emp_dept_name'];
$emp_room = $_POST ['emp_room'];
$emp_capacity = $_POST ['emp_capacity'];
$emp_dept_phonenumber = $_POST ['emp_dept_phonenumber'];
$emp_building = $_POST ['emp_building'];
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
//Update department
$sql = "UPDATE department ". "SET dept_id = '$emp_dept_id', dept_name = 
'$emp_dept_name', room = '$emp_room', capacity = '$emp_capacity', 
dept_phonenumber = '$emp_dept_phonenumber', building = '$emp_building'". "WHERE 
dept_id = $emp_dept_id;";
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to UPDATE data. <br/>";
}
$sql = "SELECT * FROM department;";
if (!($result1 = mysqli_query($con,$sql))) {
echo "Failed to SELECT data. <br/>";
}
//output in a table
echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Room</th>
<th>Capacity</th>
<th>Phone number</th>
<th>Building</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row["dept_id"] . "</td>";
echo "<td>" . $row["dept_name"] . "</td>";
echo "<td>" . $row["room"] . "</td>";
echo "<td>" . $row["capacity"] . "</td>";
echo "<td>" . $row["dept_phonenumber"] . "</td>";
echo "<td>" . $row["building"] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
