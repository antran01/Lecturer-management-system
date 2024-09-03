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
$sql="select * from department where dept_name like '%$search%'";
if (!($result = mysqli_query($con,$sql))) {
echo "Failed to get data. <br/>";
}
echo "<center><table border='1'>
 <tr>
 <th>ID</th>
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
} } ?>