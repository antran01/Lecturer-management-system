<?php
//get input value
$infotype = $_POST["infotype"];
//echo $infotype;
//echo $infoname;
if($infotype=='lecturer')
$sql="select * from " . $infotype . "";
if($infotype=='department')
$sql="select * from " . $infotype . "";
if($infotype=='course')
$sql="select * from " . $infotype . "";
if($infotype=='project')
$sql="select * from " . $infotype . "";
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
$result = mysqli_query($con, $sql);
if (!$result) {
die ("Could not execute: ");
}
//output in a table
if($infotype=='lecturer'){
echo "<center><table border='1'>
<tr>
<th>Lecturer ID</th>
<th>Name</th>
<th>Gender</th>
<th>Date of birth</th>
<th>GPA</th>
<th>Salary</th>
<th>Phone Number</th>
<th>Email</th>
<th>Department ID</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
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
}
if($infotype=='course'){
echo "<center><table border='1'>
<tr>
<th>Course ID</th>
<th>Title</th>
<th>Credits</th>
<th>Department</th>
<th>Semester</th>
<th>Year</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
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
}
if($infotype=='department'){
echo "<center><table border='1'>
<tr>
<th>Department ID</th>
<th>Name of Department</th>
<th>Room</th>
<th>Capacity</th>
<th>Phone number</th>
<th>Building</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
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
}
if($infotype=='project'){
echo "<center><table border='1'>
<tr>
<th>Project ID</th>
<th>Name of project</th>
<th>Duration</th>
<th>Start Date</th>
<th>End Date</th>
<th>Budget</th>
 </tr><center>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
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
}
//close connection
mysqli_close($con);
?>