<?php
$inputuser= $_POST["user"];
$inputpass= $_POST["pass"];
$user= "root";
$password="";
$database="pharmlogin";

$connect = mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or ("database not found");

$query= "SELECT * FROM `users` WHERE `user` = '$inputuser'";
$querypass= "SELECT * FROM `users` WHERE `password` = '$inputpass'";

$result = mysql_query($query);
$resultpass = mysql_query($querypass);

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);

$serveruser=$row["user"];
$serverpass=$row["password"];

/*if ($serveruser&& $serverpass) {
	if (!result) {
		die("username or password is invalid");
		
	}

echo "<br><center>Database output</b></center><br><br>";*/

mysql_close();
	if ($inputpass==$serverpass) {
	header('location: index1.html');
	}else{
  header('location: fail.php');	
}



?>