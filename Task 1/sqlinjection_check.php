<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head> 
	<title> REGISTRATION OR LOGIN</title>

<style type="text/css">
	
</style>
	</head>
	<body>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "logininfo") or die ("Connection failed". mysqli_connect_error());
		if(isset($_POST['upass'])  && isset($_POST['uname'])){
			$Username = $_POST['uname'];
			$Pass = $_POST['upass'];


			#prevention from sql injection

			$Pass = stripcslashes($Pass);
			$Username = mysqli_real_escape_string($conn, $Username);
			$Pass = mysqli_real_escape_string($conn, $Pass);

			$query =  "SELECT * FROM logindata WHERE Username =  '$Username' and Password = '$Pass'";
			$result = mysqli_query($conn, $query);


			if(mysqli_num_rows($result)>0)
			{
				 while( $row = mysqli_fetch_assoc($result) )
      		{

				//echo $row['Username'];
				// echo "Successful";
				if ($Username == $row['Username'] && $Pass == $row['Password']) {
   				 $_SESSION['loggedin'] = true;
  				 $_SESSION['username'] = $Username;
				 header('Location: xyz.php');
				}

			}

			}

		}



		?>

		<div>
		<form  method="POST">
			Username:
			<br>
			<input type="text" name="uname" id= "uname">
			<br>
			Password:
			<br>
			<input type="Password" name="upass" id="upass">
			<br>
			<input type="submit" name="submit" id="submit" value="Login">
			
		</form>

	</div>
	</body>
	</html>
