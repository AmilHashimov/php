<?php
global $connection;
include "db1.php";
session_start();

$_SESSION['username'] = null;
$_SESSION['user_firstname'] = null;
$_SESSION['user_lastname'] = null;
$_SESSION['user_role'] = null;

header("Location: http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/index.php?_ijt=1mpl1p5sif9b63606nvovaevvp&_ij_reload=RELOAD_ON_SAVE");

?>



