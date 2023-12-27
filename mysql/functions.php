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

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


function UpdateTable()
{
    global $connection;
    $user = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET username = '$user', password = '$password' WHERE id = '$id '";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function DeleteRows(): void
{
    if (isset($_POST['submit'])) {
        global $connection;
        $user = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "DELETE FROM users WHERE id = '$id '";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }
}
?>
