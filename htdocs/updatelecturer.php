<?php
$emp_lec_ID = $_POST ['emp_lec_ID'];
$emp_lec_name = $_POST ['emp_lec_name'];
$emp_gender = $_POST ['emp_gender'];
$emp_date_of_birth = $_POST ['emp_date_of_birth'];
$emp_GPA = $_POST ['emp_GPA'];
$emp_salary = $_POST ['emp_salary'];
$emp_lec_phone_number = $_POST ['emp_lec_phone_number'];
$emp_lec_email = $_POST ['emp_lec_email'];
$emp_lec_dep_ID = $_POST ['emp_lec_dep_ID'];
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
//Update lecturer
$sql = "UPDATE lecturer ". "SET lec_ID = '$emp_lec_ID', lec_name = 
'$emp_lec_name', gender = '$emp_gender', date_of_birth = '$emp_date_of_birth', 
GPA = '$emp_GPA', salary = '$emp_salary' ,lec_phone_number = '$emp_lec_phone_number', lec_email = '$emp_lec_email', lec_dep_ID = '$emp_lec_dep_ID'". "WHERE 
lec_ID = $emp_lec_ID;";
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to UPDATE data. <br/>";
}
$sql = "SELECT * FROM lecturer;";
if (!($result1 = mysqli_query($con,$sql))) {
echo "Failed to SELECT data. <br/>";
}
//output in a table
echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Gender</th>
<th>Date of birth</th>
<th>GPA</th>
<th>Salary</th>
<th>Phone number</th>
<th>Email</th>
<th>ID of Department</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row["lec_ID"] . "</td>";
echo "<td>" . $row["lec_name"] . "</td>";
echo "<td>" . $row["gender"] . "</td>";
echo "<td>" . $row["date_of_birth"] . "</td>";
echo "<td>" . $row["GPA"] . "</td>";
echo "<td>" . $row["salary"] . "</td>";
echo "<td>" . $row["lec_phone_number"] . "</td>";
echo "<td>" . $row["lec_email"] . "</td>";
echo "<td>" . $row["lec_dep_ID"] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
