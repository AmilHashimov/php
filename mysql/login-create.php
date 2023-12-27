<?php
include "db.php";
include "functions.php";
createRows();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login-Create</title>
</head>
<body>

<div class="container">
	<h1>Create</h1>
	<div class="col-sm-6">
		<form action="login-create.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>
</div>

</body>
</html>