<?php
 if (isset($_REQUEST['ok']))
 {
 $search = addslashes($_POST['search']);
 if (empty($search)) {
 echo "Required to enter data";
 }
 else
{
//connect to server
$con = mysqli_connect("localhost","tranhoanggiaan","tranhoanggian");
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_errno();
} else 
//use database
$db_selected = mysqli_select_db($con, "lecturermanagement");
if (!$db_selected) {
 echo "Failed to select DB. <br/>";
}
 $sql = "select * from lecturer where lec_name like '%$search%'";
 if (!($result = mysqli_query($con,$sql))) {
 echo "Failed to get data. <br/>";
}
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
} } ?>