<html>
<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
   <link rel="stylesheet" type="text/css" href="mystyle.css">


</head>
<body>
	
	<h1> Please enter prescription</h1>
	<br>
<form action="data.php" method="post" />
	<p>First name     <input type="text" name="input1" /></p>
	<p>Last name     <input type="text" name="input2" /></p>
	<p>Medication <input type="text" name="input3" /></p>
	<p>Healthcard  <input type="text" name="input4" /></p>
	<p>Doctor's Name <input type="text" name="input6" /></p>
	<p> Valid until <input type= "date" name="until"> </p><br> <br>

<td>Gender:</td>
<td>M</td>
<td><input name="case" type="radio" id="case1" value="MALE"></td>
<td>F</td>
<td><input name="case" type="radio" id="case1" value="FEMALE" ></td><br><br>

<td>Generic SUB:</td>
<td>YES</td>
<td><input name="case1" type="radio" id="case2" value="YES" ></td>
<td>NO</td>
<td><input name="case1" type="radio" id="case2" value="NO" ></td><br><br>

<div>


<textarea name= "input5" cols ="40" rows="5" > enter notes for medication
			</textarea><br> <br>

<input type="submit" value="Submit" />
</div>
</form>
<br><br>

<?php

		

		 date_default_timezone_set("America/New_york");

			echo date("h:i:s A")."<br>";
			echo date("l  F jS   Y" )."<br>"
			

?>
