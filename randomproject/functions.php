<?php

function createRows()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $passwor = $_POST['password'];
        $user = mysqli_real_escape_string($connection, $user);
        $passwor = mysqli_real_escape_string($connection, $passwor);


        $hashFormat = "$2y$10";
        $salt = "aKCY3v8O8AfyiO7CTfZQ8";

        $hashF_and_salt = $hashFormat . $salt;
        $passwor = password_hash($salt,PASSWORD_BCRYPT);

        $query = "INSERT INTO users (username, password)  VALUES ('$user', '$passwor')";
        $mysql = mysqli_query($connection, $query);
        if (!$mysql) {
            die('QUERY FAILED' . mysqli_error($connection));
        }
    }
}
?>
