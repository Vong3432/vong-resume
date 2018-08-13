<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Success!</title>
</head>
<body>

<div class="content">
	<?php if(isset($_SESSION['succcess'])): ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
		<?php endif ?>
		
		<?php if(isset($_SESSION["username"])): ?>
			<p>Thank you <bold><?php echo $_SESSION['username']; ?></bold></p>
			<p><a href="malaysiaFood.html">Click here to access main page!</a></p>
			<p><a href="login.php?logout='1" style="color: red">Logout</a></p>
		<?php endif ?>
</div>

</body>
</html>