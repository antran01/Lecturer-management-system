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
 $sql = "select * from course where title like '%$search%'";
 if (!($result = mysqli_query($con,$sql))) {
 echo "Failed to get data. <br/>";
}
echo "<center><table border='1'>
 <tr>
 <th>ID</th>
 <th>Title</th>
 <th>Credits</th>
 <th>Building</th>
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
} } ?>