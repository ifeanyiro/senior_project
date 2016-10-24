<?php

define('DB_NAME', 'pharm');
define('DB_USER', 'YOUR USERNAME HERE');
define('DB_PASSWORD', 'YOUR PASSWORD HERE');
define('DB_HOST', 'localhost');


$link = mysql_connect("localhost", 'root', "");

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_POST['input1'];
$value2 = $_POST['input2'];
$value3 = $_POST['input3'];
$value4 = $_POST['input4'];
$value5 = $_POST['case'];
$value6 = $_POST['until'];
$value7 = $_POST['input5'];
$value8=$_POST['case1'];
$value9=$_POST['input6'];


$sql = "INSERT INTO form1 (firstname, lastname,med,card,gender,DATE,notes,generic,doctor) VALUES ('$value', '$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9')";
	# code...
	

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());}
else {echo "PRESCRIPTION upload sucessful ";
}

mysql_close();
?>