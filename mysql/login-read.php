<?php
$connection = mysqli_connect('localhost' , 'root' , '' , 'loginapp');
    if ($connection){
        echo "we are connected";

    }else{
        die("database connection failed");
    }
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result){
        die('Query FAILED' . mysqli_error($result));
    }


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login-read</title>
</head>
<body>
<h1>Read Info</h1>
<div class="container">
	<div class="col-sm-6">
        <?php
        while ($row = mysqli_fetch_assoc($result)){
        ?>
		<pre>
			<?php
            print_r($row);
            ?>
		<pre>
			<?php
            } ?>
	</div>
</div>
</body>
</html>
