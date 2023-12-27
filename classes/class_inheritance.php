<?php

class Car{
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

//$porche = new Car();
//$truck =  new Car();
//echo $truck->doors = 6 . "<br>";
//$porche->MoveWheels();
////$porche ->wheels = 8;
//echo $porche->wheels;
//$porche ->MoveWheels();

class Plane extends Car {
//    var $wheels = 10;


}

$jet = new Plane();
echo $jet ->wheels;
//if (class_exists("Plane")){
//    echo "method exists";
//}else{
//    echo "try again";
//}


?>