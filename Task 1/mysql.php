<!DOCTYPE html>
<html>
<head> 
  <title> Session </title>
	<style type="text/css">

	</style>
	</head>
	<body style="background-color: blue;">


		<?php

		

	$conn = mysqli_connect("localhost", "root", "", "amjad") or die ("connection failed". mysqli_connect_error());
	$query = "SELECT * FROM employee WHERE salary>25000 && department =5 ";

	$result = mysqli_query($conn, $query) or die("Error while fetching data");


echo "<table border = 1>
<tr> 
<th>FIRST NAME </th>
<th>LAST NAME </th>
<th> SSN </th>
<th>SALARY </th>
</tr>";

   while( $row = mysqli_fetch_array($result) )
      {
            
           echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>".  $row['SSN']. "</td><td>". $row['salary'] ."</td></tr>";
      }


echo "</table";

		?>



      </body>
      </html>