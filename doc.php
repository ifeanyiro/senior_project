<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("pharm", $con);
$result = mysql_query("SELECT * FROM form1");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>