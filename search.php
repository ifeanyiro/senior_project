
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>View choice</title>

   
    <link href="mystyle.css" rel="stylesheet">

   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>
<h1> Patient search</h1><br>
</header>
<form action="search.php" method="post">
 <input type="text" name="search" placeholder="Search"required>

 <input type="submit" value=">>" />
</form>
   
  
   
  
  <div>

        
    <?php

  $con = mysql_connect("localhost","root","");
      mysql_select_db("pharm") or die("could not find db!");
   
    // collect
    if (isset($_POST['search'])) {
     $searchq = $_POST['search'];
     if ($searchq=="") {
      return false;
       # code...
     }
     $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
     
     $query = mysql_query("SELECT * FROM form1 WHERE card LIKE '%$searchq%'") or die("Could not search.");
        $count = mysql_num_rows($query);
     
     if($count == 0 ) {
      echo "'No results found";

     } else {

    echo "<table border='5'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Doctor name</th>
    <th>Brand of Medication</th>
    <th>Gender</th>
    <th>Valid until</th>
    <th>Generic sub</th>
    <th>Dosage</th>



    </tr>";
    echo "<tr>";

      while($row = mysql_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
     echo "<td>" . $row['Doctor'] . "</td>";
    echo "<td>" . $row['med'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['DATE'] . "</td>";
    echo "<td>" . $row['generic'] . "</td>";
    echo "<td>" . $row['notes'] . "</td>";
 

    echo "</tr>";
    }
    echo "</table>";

     
      }
     }

    ?>
    </div>
</body>


</html>
