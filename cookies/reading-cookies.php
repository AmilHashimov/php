<?php
$name = "Elmir";
$value = 78;
$expire = time() + (60*60*24*7);

$cook = setcookie($name,$value,$expire);




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_COOKIE["name"])){
    $someName = $_COOKIE["name"];
    echo $someName;
}else{
    $someName = "";
}

?>


</body>
</html>