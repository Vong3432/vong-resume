<?php
	session_start();

	$username  = "";
	$errors = array();

	//connect to database
	$db = mysqli_connect('localhost','root','','register');

	// if sign up btn is clicked
	if (isset($_POST['signup']))
	{
		$username = mysqli_real_escape_string($db,$_POST['account']);
		$password1 = mysqli_real_escape_string($db,$_POST['pass']);
		$password2 = mysqli_real_escape_string($db,$_POST['pass2']);	

		//if got empty
		if(empty($username))	
		{
			array_push($errors,"Username is required");//add errors to array

		}

		if(empty($password1))	
		{
			array_push($errors,"Password is required");//add errors to array

		}

		if($password1 != $password2)
		{
			array_push($errors, "The passwords are not matched");
		}

		//if no errors
		if(count($errors) == 0)
		{
			$password = md5($password1); //encrypt password before storing into database

			$sql="INSERT INTO users(username,password)VALUES('$username','$password')";

			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: loginsuccess.php');
		}
		
		//log user in from login page
		if(isset($_POST['login']))
		{
			$username = mysql_real_escape_string($_POST['username']);			
			$password = mysql_real_escape_string($_POST['password']);	

			//if got empty
			if(empty($username))	
			{
				array_push($errors,"Username is required");//add errors to array

			}
			if(empty($password))
			{
				array_push($errors, "Password required");
			}

			if(count($errors) == 0)
			{
				$password = md5($password); // encrypt password

				$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

				$result = mysqli_query($db,$query);
				if(mysqli_num_rows($result) == 1)
				{
					//log user in
					$_SESSION['username'] = $username;
				    $_SESSION['success'] = "You are now logged in";
				    header('location: loginsuccess.php');
				}

				else
				{
					array_push($errors, "Wrong username / password");
				}
			}
		}

		//log out
		if(isset($_GET['logout']))
		{
			session_destroy();
			unset($_SESSION['username']);
			header('location: login.php');
		}
	}
?>