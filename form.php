<html>

<head>
</head>

<body>
<div id="menu">
</div>
<form action="dashboard.php" method="post">

	<h1>Login</h1>
	<?php
	if( isset($_GET['error']) ){
		echo '<p style="color: red;">Please enter your username and password to continue!</p>';
	}
	?>	
	<p>Username:
	<br /><input type="text" name="username" /></p>
	<p>Password:
	<br /><input type="password" name="password" /></p>
	<p>
		<input type="submit" value="Login" />
		<input type="reset" value="Clear" />
	</p>
	
	<?php
		//require('db.php');
	?>
</form>
<div id="footer">
</div>
</body>

</html>


