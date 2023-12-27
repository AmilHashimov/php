<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels()
    {
//        echo "we are moving";
        $this->wheels = 10;
    }
	function CreateDoors(){
		$this ->doors = 4;
	}

}

$porche = new Car();
$truck = new Car();
echo $truck->doors = 6 . "<br>";
$porche->MoveWheels();
//$porche ->wheels = 8;
echo $porche->wheels;
//$porche ->MoveWheels();


//if (class_exists("Car", "MoveWheels")){
//    echo "method exists";
//}else{
//    echo "try again";
//}

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

</body>
</html>
