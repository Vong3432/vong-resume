<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		body
		{
			background: linear-gradient(to right,lightblue,mediumpurple);
			font-family: 'Didact Gothic', sans-serif;	

		}

		form
		{
			margin: 0 auto;
			position: relative;
			margin-bottom: 10%;
			top: 100px;
			width: 50%;
			height: auto;
			box-shadow: 2px 2px 10px 10px grey;
		}

		input,label
		{
			margin-top: 20px;
			margin-bottom: 30px;
			margin-left: 5%;
			margin-right: 5%;			
		}

		label
		{
			font-size: 20px;
			font-weight: bolder;
		}

		input[type=text],input[type=password]
		{
			border-radius: 5px 5px 5px 5px;	
			width: 90%;	
			margin-left: 3%;
			margin-right: 5%;
			font-size: 15px;
		}


		.form-container
		{
			background-color: white;
			margin: 3px;
		}

		.loginbtn
		{
			margin-left: auto;
			margin-right: auto;
			display: block;
			margin-top: 70px;
			position: relative;bottom: 30px;			
			padding: 15px 17px;
			border-radius: 5px;
			box-shadow: 2px 3px 15px black;
		}
		#message
		{
			margin-left: 5%;
		}

		.valid
		{
			color: green;
		}
		.valid:before
		{
			position: relative;
			left: -10px;
			content: "✔";
		}

		.invalid
		{
			color: red;
		}

		.invalid:before
		{
			position: relative;
			left: -10px;
			content: "✖";
		}

		.signup
		{
			text-align: center;
		}

		@media screen and (max-width: 600px)
		{
			form
			{
				width: 100%;
			}
		}
	</style>
</head>
<body>

<div class="top-logo">
	<a href="https://vong3432.github.io/vong-resume/malaysiaFood.html">
	<img src="image/logo.png" style="display: block;
	margin-left: auto;margin-right: auto;width: 100px;position: relative;top: 60px;">
	</a>
</div>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<!-- Display validation erros -->
		<?php include('errors.php');?>

		<div class="form-container">

			<!------------------------------------------------ Form title --------------------------------------->
			<h1 style="text-align: center;position: relative;top: 10px;">Sign in</h1>
			<hr>
			<br>
			
			<!----------------------------------------------- Account ----------------------------------------------->
			<label for="account">Your account: </label>
			<input type="text" name="account">
			<br>

			<!------------------------------------------------ Password---------------------------------------->
			<label for="pass">Password: </label>
			<input type="password" id="psw" maxlength="16" pattern="(?=.*[a-z]).{8,}" name="pass">
			
			<!--------------------------------------- Message during user input password -------------------------->
			<div id="message">
				<h3>Password must contain:</h3>
				<p id="letter" class="invalid">A lowercase letter</p>
				<p id="length" class="invalid">Minumum 8 characters.</p>
			</div>


			<!----------------------------------------------------- Login ----------------------------------------->
			<button type="submit" class="loginbtn" name="login">Sign in</button>

			<!----------------------------------------------------- Sign up ---------------------------------------->
			<div class="signup">
				<a href="signup.php>">Don't have an account? Sign up now!</a>
			</div>


		</div>
	</form>




<!----------------------------------------------- Validation Script -------------------------------------------- -->
<script>
	let userInput = document.getElementById("psw");
	let letter = document.getElementById("letter");
	let length = document.getElementById("length");

	userInput.onfocus = function()
	{
		document.getElementById("message").style.display = "block";
	}

	userInput.onblur = function()
	{
		document.getElementById("message").style.display = "none";
	}

	userInput.onkeyup = function()
	{
		let lowerCaseLetters = /[a-z]/g;

		if(userInput.value.match(lowerCaseLetters))
		{
			letter.classList.remove("invalid");
			letter.classList.add("valid");
		}

		else
		{
			letter.classList.remove("valid");
			letter.classList.add("invalid");
		}

		if(userInput.value.length >= 8) {
    	length.classList.remove("invalid");
    	length.classList.add("valid");
  		} else {
   		 length.classList.remove("valid");
    	 length.classList.add("invalid");
  		}
	}


</script>
</body>
</html>