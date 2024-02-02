<?php
global $connection;
include "db1.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

}
while ($row = mysqli_fetch_array($select_user_query)) {
    $db_id = $row['user_id'];
    $db_firstname = $row['user_firstname'];
    $db_lastname = $row['user_lastname'];
    $db_password = $row['user_password'];
    $db_role = $row['user_role'];
    $db_username = $row['username'];
}
if ($username === $db_username && $password === $db_password){
    $_SESSION['username'] = $db_username;
    $_SESSION['user_firstname'] = $db_firstname;
    $_SESSION['user_lastname'] = $db_lastname;
    $_SESSION['user_role'] = $db_role;

    header("Location: http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/admin/admin.php?_ijt=lhtcbdn9ld0snu26mgvl5q1o1t&_ij_reload=RELOAD_ON_SAVE");

} else{
    header("Location: index.php");
}


?>



