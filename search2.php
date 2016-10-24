
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("pharm") or die("could not find db!");
$output = '';
// collect
if (isset($_POST['search'])) {
 $searchq = $_POST['search'];
 $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
 
 $query = mysql_query("SELECT * FROM form1 WHERE firstname LIKE '%$searchq%'") or die("Could not search.");
    $count = mysql_num_rows($query);
 
 if($count == 0 ) {
  $output = 'No results found.';
 } else {
  while($row = mysql_fetch_array($query)) {
   
   $firstname = $row['firstname'];
   $lname=$row['lastname'];
   
   $output .= '<div>'.$firstname.' '. $lname.'</div>';
  }
 }
}
?>
<form action="search2.php" method="post">
 <input type="text" name="search" placeholder="Search">
 <input type="submit" value=">>" />
</form>

<?php 
print $output;
?>