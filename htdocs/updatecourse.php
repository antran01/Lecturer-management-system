<?php
$emp_course_id = $_POST ['emp_course_id'];
$emp_title = $_POST ['emp_title'];
$emp_course_credits = $_POST ['emp_course_credits'];
$emp_course_department = $_POST ['emp_course_department'];
$emp_semester = $_POST ['emp_semester'];
$emp_year = $_POST ['emp_year'];
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
//Update course
$sql = "UPDATE course ". "SET course_id = '$emp_course_id', title = '$emp_title', course_credits = '$emp_course_credits', course_department = '$emp_course_department', semester = '$emp_semester', year = '$emp_year'". "WHERE course_id = $emp_course_id";
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to UPDATE data. <br/>";
}
$sql = "SELECT * FROM course";
if (!($result1 = mysqli_query($con,$sql))) {
echo "Failed to SELECT data. <br/>";
}
//output in a table
echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Title</th>
<th>Credits</th>
<th>Department</th>
<th>Semester</th>
<th>Year</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row["course_id"] . "</td>";
echo "<td>" . $row["title"] . "</td>";
echo "<td>" . $row["course_credits"] . "</td>";
echo "<td>" . $row["course_department"] . "</td>";
echo "<td>" . $row["semester"] . "</td>";
echo "<td>" . $row["year"] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
