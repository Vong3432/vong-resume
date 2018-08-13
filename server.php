<?php
	$username  = "";
	$errors = array();

	//connect to database
	$db = mysqli_connect('localhost','register');

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
		}
	
	}
?>