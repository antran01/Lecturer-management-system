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
 $sql = "select * from project where project_name like '%$search%'";
 if (!($result = mysqli_query($con,$sql))) {
 echo "Failed to get data. <br/>";
}
echo "<center><table border='1'>
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Duration</th>
 <th>Start date</th>
 <th>End date</th>
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
} } ?>