<?php
$name = "Elmir";
$value = 78;
$expire = time() + (60*60*24*7);

$cook = setcookie($name,$value,$expire);
print_r($cook);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>

</body>
</html>