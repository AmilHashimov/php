<?php


class Car
{
    static $wheels = 4;
    var $hood = 1;


//    function MoveWheels()
//    {
////        echo "we are moving";
//        $this->wheels = 10;
//    }

    function CreateDoors()
    {
        $this->doors = 4;
    }

}

$porche = new Car();
//$porche -> wheels;
echo Car::$wheels;





?>