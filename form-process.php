<?php
//Checking for form submission

if (isset($_POST['submit'])) {

    $name = array("Amil", "Student", "Huseyn", "Marry");
    $minimum = 5;
    $user = $_POST['user'];

    if (strlen($user) < $minimum) {
        echo "ur username is short";
    }
    echo "<br>";
    if (!in_array($user ,$name )) {
        echo "goodbye";

    } else {
        echo "Welcome";
    }

//echo $lala;
}

//echo "<br>";
//if (isset($_POST['user'])) {
//
//    echo "you are the warior!!";
//}
?>
