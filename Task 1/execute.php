<?php


session_start();

?>

<!DOCTYPE html>
<html>
<head> 
  <title> Session </title>
	<style type="text/css">

	</style>
	</head>
	<body style="background-color: blue;">

		<?php
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 	   echo "Welcome to Dashboard " . $_SESSION['username'] ;
		}


		 else {
    	echo "Please log in first to see this page.";
    	header('Location: sqlinjection_check.php');
		}
		
?>

</body>
</html>