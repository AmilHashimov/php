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
    <title>Random Project</title>
    <link rel="stylesheet" href="projectnova.css">
</head>
<body>
<div class="box">
	<div class="boxs">
		<p>Register</p>
		<div class="col-sm-6">
			<form action="heaven.php" method="post">
				<div class="form-group">
					<label for="username"></label>
					<input type="text" name="username" class="form-control" placeholder="        Username">
				</div>
				<div class="form-group">
					<label for="password"></label>
					<input type="text" placeholder="         Password" name="password" class="form-control">
				</div>
				<div class="regs">
					<input class="btn" type="submit" name="submit" value="Register">

				</div>



			</form>
	</div>


</div>




</body>
</html>
