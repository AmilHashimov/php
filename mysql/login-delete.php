<?php
include "db.php"; ?>
<?php include "functions.php"; ?>
<?php

DeleteRows();



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Delete</title>
</head>
<body>
<div class="container">
	<h1>Delete</h1>
    <div class="col-sm-6">
        <form action="login-delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">

                    <?php
                    showAllData();


                    ?>
                    <!--					<option value="">1</option>-->
                    <!--					<option value="">2</option>-->
                    <!--					<option value="">3</option>-->
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>

    </div>
</div>
</body>
</html>
