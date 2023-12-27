<?php
////Checking for form submission
//
//if (isset($_POST['submit'])) {
//
//    $name = array("Amil", "Student", "Huseyn", "Marry");
//    $minimum = 5;
//    $user = $_POST['user'];
//
//    if (strlen($user) < $minimum) {
//        echo "ur username is short";
//    }
//	echo "<br>";
//    if (!in_array($user ,$name )) {
//			echo "goodbye";
//
//    } else {
//		echo "Welcome";
//	}
//
////echo $lala;
//}
//
////echo "<br>";
////if (isset($_POST['user'])) {
////
////    echo "you are the warior!!";
////}
//?>
<!---->
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--	<meta charset="UTF-8">-->
<!--	<meta name="viewport"-->
<!--		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--	<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--	<title>Document</title>-->
</head>
<body>

<form action="form-process .php" method="post">
	<input type="text" placeholder="Enter Username" name="user">
	<input type="password" placeholder="Enter Passw"><br>
	<input type="submit" name="submit">

</form>


<?php

/* */


$title = "messi";

$number = 10;

$name = "<h1>Amil</h1>";

echo $name;

$numberList = array(23,85,34,55,32,95,36,'<p>Hohohohoh</p>');
print_r($numberList);
$numberList = [];





if (10<20) {

    echo "yay";

} elseif (4<5){
	echo "of course it is true";
}

else{
    echo "louis they are mad at me";

}





$numbers =  20;
switch ($numbers){
    case 20:
		echo "ohmygod";
	case 30:
		echo "ohnoooo";

}




$counter = 4;
while($counter < 10){
	echo $counter;
	$counter++;
}



for ($counter = 0; $counter < 10; $counter++  ){

	echo $counter . "<br>";

}

$cookies = array(12,32,44,32,54,21,64,631,1);

foreach ($cookies as $cookie){

	echo "$cookie \n";

}

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// массив $arr сейчас таков: array(2, 4, 6, 8)
unset($value); // разорвать ссылку на последний элемент


function innit(){
    helpme();
	calculator();
}
innit();

function helpme(){

	echo "Good morning usa, I think it is going to be a wonderful day";

}

function calculator(){

	echo 123+321;




}


function greeting($message){

		echo $message;
}

greeting("hallo");


function calc($num ,  $num2, $plus = '+'){

	return match ($plus) {
        '+' =>  $num + $num2 ,
		default => $num
	};


}
echo calc(12,num2:23);


function ok($number1, $number2){


	return $number1 + $number2;
}

$result = ok(10,12);
echo $result;


//GLOBAL AND LOCAL VARS

$x = "outside"; //global
function convert(){
	global $x;
	$x = "inside"; //local

}

echo $x;

echo "<br>";

convert();

echo $x;

echo "<br>";


function ConvertAgain(){
	global $x;
	$x = "in and out";
}

ConvertAgain();
echo $x;


//CONSTANTS

$numm = 10;

$numm = "amil";
echo $numm . "<br>";


define("NAME", 23);


echo NAME;

//MATH FUNCTIONS


echo pow(2,3);

echo "<br>";

echo rand(100, 200);


echo "<br>";

echo sqrt(4);

echo "<br>";

echo ceil(4.6 ); //floor rounds to minimum, round to min and max

//STRING FUNCTIONS


$str = "Ja mein Furher";

echo strlen($str);

echo "<br>";

echo strtoupper($str);  //strtolower lowers the text

//ARRAY FUNCTIONS

$list = [1,2,3,4,5,6,7,8,9,29];

echo max($list);

echo "<br>";

echo min($list);

sort($list);

echo "<br>";

print_r($list);


// 34. Checking for Form Submission



?>


</body>
</html>




